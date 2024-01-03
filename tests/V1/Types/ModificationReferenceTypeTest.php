<?php

use LightSideSoftware\EVat\V1\Types\ModificationReferenceType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new ModificationReferenceType(
        declarationReferenceId: 'ID4354535',
        declarationReferenceIndex: 1,
        barCodeReference: 1674734740,
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new ModificationReferenceType(
        declarationReferenceId: 'ID435@4535',
        declarationReferenceIndex: 1,
        barCodeReference: 174734740,
    );
})->throws(ValidationException::class);
