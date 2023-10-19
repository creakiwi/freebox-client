<?php

namespace Creakiwi\Freebox\Infrastructure;

enum Operation: string
{
    case GET = 'GET';
   case POST = 'POST';
   case PUT = 'PUT';
    case DELETE = 'DELETE';
}
