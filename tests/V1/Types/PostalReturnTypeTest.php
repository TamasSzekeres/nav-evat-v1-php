<?php

use LightSideSoftware\EVat\V1\Types\PostalReturnType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new PostalReturnType(
        postalCode: '1234',
        city: 'Budapest',
        additionalAddress: 'Budapest utca 1.',
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new PostalReturnType(
        postalCode: '12344567',
        city: 'Budapest',
        additionalAddress: 'Budapest utca 1.',
    );
})->throws(ValidationException::class);
