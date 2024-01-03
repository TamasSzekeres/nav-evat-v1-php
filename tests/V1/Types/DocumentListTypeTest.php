<?php

use LightSideSoftware\EVat\V1\Types\DocumentListType;
use LightSideSoftware\EVat\V1\Types\Enums\QueryResultStatusType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new DocumentListType(
        queryResultStatus: QueryResultStatusType::DONE,
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new DocumentListType(
        queryResultStatus: QueryResultStatusType::DONE,
        cashRegisterDigests: [false],
    );
})->throws(ValidationException::class);
