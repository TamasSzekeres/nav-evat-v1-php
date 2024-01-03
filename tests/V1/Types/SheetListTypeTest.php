<?php

use LightSideSoftware\EVat\V1\Types\Enums\SheetNameType;
use LightSideSoftware\EVat\V1\Types\SheetFieldType;
use LightSideSoftware\EVat\V1\Types\SheetListType;
use LightSideSoftware\EVat\V1\Types\SheetType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new SheetListType(
        sheets: [
            new SheetType(
                sheetName: SheetNameType::VAT_SHEET_2,
                sheetPageCount: 1,
                sheetFields: [
                    new SheetFieldType(
                        sheetFieldName: 'ACDD45',
                        sheetFieldValue: 'test',
                    ),
                ],
            ),
        ],
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new SheetListType(
        sheets: [false],
    );
})->throws(ValidationException::class);
