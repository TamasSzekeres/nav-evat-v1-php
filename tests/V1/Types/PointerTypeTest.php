<?php

use LightSideSoftware\EVat\V1\Types\PointerType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new PointerType(
        lineNumber: 1,
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new PointerType(
        lineNumber: -1,
    );
})->throws(ValidationException::class);
