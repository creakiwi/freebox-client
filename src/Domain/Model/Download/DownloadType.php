<?php

namespace Creakiwi\Freebox\Domain\Model\Download;

enum DownloadType: string
{
    case BT = 'bt';
    case NZB = 'nzb';
    case HTTP = 'http';
    case FTP = 'ftp';
}
