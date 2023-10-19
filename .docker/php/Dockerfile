FROM php:8.2-fpm-alpine

ARG PROJECT_ORGANIZATION
ARG PROJECT_NAME
ARG USER

ENV TZ Europe/Paris

ENV COMPOSER_HOME /tmp/composer
ENV COMPOSER_CACHE_DIR /tmp/composer/cache
ENV COMPOSER_ALLOW_SUPERUSER true
ENV COMPOSER_VERSION 2.6.5

ENV DOCKER_USER_ID 1000
ENV DOCKER_USER=$USER

RUN apk add --update --no-cache \
    bash \
    git

RUN curl -sS http://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=${COMPOSER_VERSION} \
	&& chmod -R 777 /tmp \
	&& wget --quiet -O /usr/local/bin/local-php-security-checker https://github.com/fabpot/local-php-security-checker/releases/download/v1.0.0/local-php-security-checker_1.0.0_linux_amd64 && chmod +x /usr/local/bin/local-php-security-checker \
    && wget https://get.symfony.com/cli/installer -O - | bash \
    && mv /root/.symfony5/bin/symfony /usr/local/bin

ADD entrypoint.sh /docker/entrypoint.sh
ADD .bashrc /docker/.bashrc

RUN adduser -s /bin/bash -u ${DOCKER_USER_ID} -h /home/${DOCKER_USER} -D ${DOCKER_USER} \
    && export HOME=/home/${DOCKER_USER} \
    && mv /docker/.bashrc /home/${DOCKER_USER}/.bashrc \
    && chown ${DOCKER_USER}:${DOCKER_USER} /home/${DOCKER_USER}/.bashrc

ENTRYPOINT ["/bin/sh", "/docker/entrypoint.sh"]
CMD ["php-fpm"]
