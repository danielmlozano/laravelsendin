<?php

namespace Danielmlozano\LaravelSendin\Exceptions;

use Exception;
use Throwable;

class SBException extends Exception
{
    public function __construct(string $message, int $code = 0, Throwable $previous = null)
    {
        $message = "An error has ocurred while calling the SendinBlue API: $message";
        parent::__construct($message, $code, $previous);
    }
}
