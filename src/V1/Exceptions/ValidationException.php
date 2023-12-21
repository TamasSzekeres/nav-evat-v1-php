<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Exceptions;

use Exception;
use LightSideSoftware\EVat\V1\Types\Validation\ErrorBag;
use Throwable;

/**
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
class ValidationException extends Exception
{
    public function __construct(
        string $message,
        private readonly ErrorBag $validationErrors,
        int $code = 0,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function getValidationErrors(): ErrorBag
    {
        return $this->validationErrors;
    }
}
