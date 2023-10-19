<?php

namespace Creakiwi\Freebox\Domain\Model\FileSystem;

enum Error: string
{
    case NONE = 'none';
    case ARCHIVE_READ_FAILED = 'archive_read_failed';
    case ARCHIVE_OPEN_FAILED = 'archive_open_failed';
    case ARCHIVE_WRITE_FAILED = 'archive_write_failed';
    case CHDIR_FAILED = 'chdir_failed';
    case DEST_IS_NOT_DIR = 'dest_is_not_dir';
    case FILE_EXISTS = 'file_exists';
    case FILE_NOT_FOUND = 'file_not_found';
    case MKDIR_FAILED = 'mkdir_failed';
    case OPEN_INPUT_FAILED = 'open_input_failed';
    case OPEN_OUTPUT_FAILED = 'open_output_failed';
    case OPENDIR_FAILED = 'opendir_failed';
    case OVERWRITE_FAILED = 'overwrite_failed';
    case PATH_TOO_BIG = 'path_too_big';
    case REPAIR_FAILED = 'repair_failed';
    case RMDIR_FAILED = 'rmdir_failed';
    case SAME_FILE = 'same_file';
    case UNLINK_FAILED = 'unlink_failed';
    case UNSUPPORTED_FILE_TYPE = 'unsupported_file_type';
    case WRITE_FAILED = 'write_failed';
    case DISK_FULL = 'disk_full';
    case INTERNAL = 'internal';
    case INVALID_FORMAT = 'invalid_format';
    case INCORRECT_PASSWORD = 'incorrect_password';
    case PERMISSION_DENIED = 'permission_denied';
    case READLINK_FAILED = 'readlink_failed';
    case SYMLINK_FAILED = 'symlink_failed';
    case COPY_INTO_ITSELF = 'copy_into_itself';
    case TRUNCATE_FAILED = 'truncate_failed';
}
