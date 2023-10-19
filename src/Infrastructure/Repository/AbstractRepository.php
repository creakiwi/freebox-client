<?php

namespace Creakiwi\Freebox\Infrastructure\Repository;

use Creakiwi\Freebox\Domain\Exception\DomainException;
use Creakiwi\Freebox\Domain\Exception\UnsuccessException;
use Creakiwi\Freebox\Domain\Model\Authentication\Session;
use Creakiwi\Freebox\Infrastructure\Operation;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

abstract class AbstractRepository
{
    private const FREEBOX_URI = 'https://mafreebox.freebox.fr/api/';

    private ?Session $session = null;

    public function __construct(private HttpClientInterface $client, private SerializerInterface $serializer)
    {
    }

    public function setSession(Session $session): void
    {
        $this->session = $session;
    }

    /**
     * @throws DomainException
     * @throws UnsuccessException
     */
    protected function get(string $model, string $url, array $options = [], mixed $object = null, bool $authenticated = true, bool $unserializeResponse = false): mixed
    {
        return $this->request($model, Operation::GET, $url, $options, $object, $authenticated, $unserializeResponse);
    }

    /**
     * @throws DomainException
     * @throws UnsuccessException
     */
    protected function post(string $model, string $url, array $options = [], mixed $object = null, bool $authenticated = true, bool $unserializeResponse = false): mixed
    {
        return $this->request($model, Operation::POST, $url, $options, $object, $authenticated, $unserializeResponse);
    }

    protected function delete(string $model, string $url, array $options = [], bool $authenticated = true, bool $unserializeResponse = true)
    {
        return $this->request($model, Operation::DELETE, $url, $options, authenticated: $authenticated, unserializeResponse: $unserializeResponse);
    }

    protected function put(string $model, string $url, array $options = [], mixed $object = null, bool $authenticated = true, bool $unserializeResponse = false): mixed
    {
        return $this->request($model, Operation::PUT, $url, $options, $object, $authenticated, $unserializeResponse);
    }

    /**
     * @throws DomainException
     * @throws UnsuccessException
     */
    protected function request(string $model, Operation $operation, string $url, array $options = [], mixed $object = null, bool $authenticated = true, $unserializeResponse = false): mixed
    {
        try {
            $rawResponse = $this->client->request($operation->value, $url, $this->getOptions($options, $authenticated));
            $response = json_decode($rawResponse->getContent(), true);

            $this->handleErrors($response);
        } catch (DomainException $exception) {
            throw $exception;
        } catch (\Exception $exception) {
            throw new DomainException('Network issues', 0, $exception);
        }

        if (true === $unserializeResponse) {
            return $this->unserialize(json_encode($response), $model, $object);
        }

        return $this->unserialize(json_encode($response['result']), $model, $object);
    }

    private function getOptions(array $options, bool $authenticated): array
    {
        $baseOptions = [
            'base_uri' => self::FREEBOX_URI,
            'cafile' => __DIR__.'/../../../freebox.crt',
        ];

        if (true === $authenticated) {
            $baseOptions['headers']['X-Fbx-App-Auth'] = $this->session?->getSessionToken();
        }

        return  array_merge($baseOptions, $options);
    }

    private function unserialize(string $data, string $model, mixed $object = null, string $format = 'json', $context = []): mixed
    {
        $baseContext = [];
        if (null !== $object) {
            $baseContext[AbstractNormalizer::OBJECT_TO_POPULATE] = $object;
        }

        return $this->serializer->deserialize($data, $model, $format, array_merge($baseContext, $context));
    }

    private function handleErrors(array $response): void
    {
        if (false === array_key_exists('success', $response) || false === $response['success']) {
            $message = array_key_exists('result', $response) ? json_encode($response['result']) : 'unknown';

            throw new UnsuccessException($message, 0);
        }
    }
}
