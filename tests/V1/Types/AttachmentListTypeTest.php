<?php

use LightSideSoftware\EVat\V1\Types\AttachmentListItemType;
use LightSideSoftware\EVat\V1\Types\AttachmentListType;
use LightSideSoftware\EVat\V1\Types\Enums\FileExtensionType;
use LightSideSoftware\EVat\V1\Types\Enums\FileStatusType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;
use LightSideSoftware\NavApi\V3\Types\CryptoType;

it('throws no exceptions', function () {
    new AttachmentListType(
        attachmentListItems: [
            new AttachmentListItemType(
                claimCheckId: 'ID5646',
                fileName: 'test',
                fileExtension: FileExtensionType::PDF,
                contentHash: CryptoType::sha3('test'),
                claimCheckIdValidFrom: new DateTimeImmutable('2024-01-01 12:00:00'),
                claimCheckIdValidTo: new DateTimeImmutable('2024-01-02 10:00:00'),
                fileStatus: FileStatusType::ACTIVE,
            ),
        ],
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new AttachmentListType(
        attachmentListItems: [false],
    );
})->throws(ValidationException::class);
