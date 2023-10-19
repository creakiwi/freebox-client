<?php

namespace Creakiwi\Freebox\Domain\Contract;

use Creakiwi\Freebox\Domain\Model\Download\Download;
use Creakiwi\Freebox\Domain\Model\Download\File;
use Creakiwi\Freebox\Domain\Model\Download\Stats;
use Creakiwi\Freebox\Domain\Model\Response;

interface DownloadRepository extends FreeboxRepository
{
    /**
     * @return Download[]
     */
    public function all(): array;

    public function id(Download $download): Download;

    public function remove(Download $download): Response;

    public function erase(Download $download): Response;

    public function update(Download $download): Download;

    public function log(Download $download): Response;

//    public function add(): mixed;

    public function stats(): Stats;

    /**
     * @return File[]
     */
    public function files(Download $download): array;

    public function updateFile(File $file): Response;

# TRACKERS UNSTABLE
//    public function trackers(Download $download): array;
//    public function addTracker();
//    public function updateTracker();
//    public function removeTracker();

# PEERS UNSTABLE
//    public function peers(Download $download): array;

# PIECES
//    public function pieces(Download $download): Response;

# BLACKLIST UNSTABLE
//    public function blacklist(Download $download): array;
//    public function addBlacklist(Download $download): Response;
//    public function emptyBlacklist(Download $download): Response;
//    public function removeBlacklist(Download $download): Response;

# FEEDS
//    public function feeds(): array;
//    public function feed(Feed $feed): Feed;
//    public function addFeed(Feed $feed): Feed;
//    public function updateFeed(Feed $feed): Feed;
//    public function deleteFeed(Feed $feed): Response;
//    public function refreshFeed(Feed $feed): Response;
//    public function refreshFeeds(): Response;
//    public function feedItems(Feed $feed): array;
//    public function updateFeedItem(FeedItem $feedItem): Response;
//    public function downloadFeedItem(FeedItem $feedItem): Response;
//    public function markFeedItemsAsRead(Feed $feed): Response;

# CONFIG
//    public function config(): Config;
//    public function updateConfig(Config $config): Config;

# THROTTLING
//    public function throttling(): Throttling;
}
