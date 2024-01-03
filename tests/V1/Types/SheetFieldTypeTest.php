<?php

use LightSideSoftware\EVat\V1\Types\SheetFieldType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new SheetFieldType(
        sheetFieldName: 'ACDD45',
        sheetFieldValue: 'test',
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new SheetFieldType(
        sheetFieldName: 'test',
        sheetFieldValue: ' ',
    );
})->throws(ValidationException::class);
