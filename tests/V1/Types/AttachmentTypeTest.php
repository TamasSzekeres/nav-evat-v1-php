<?php

use LightSideSoftware\EVat\V1\Types\AdditionalAttachmentInfoType;
use LightSideSoftware\EVat\V1\Types\AttachmentType;
use LightSideSoftware\EVat\V1\Types\Enums\AttachmentCategoryType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new AttachmentType(
        claimCheckId: 'ID5645',
        attachmentCategory: AttachmentCategoryType::FACTORING_CONTRACT,
        additionalAttachmentInfo: new AdditionalAttachmentInfoType(),
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new AttachmentType(
        claimCheckId: 'ID5@645',
        attachmentCategory: AttachmentCategoryType::FACTORING_CONTRACT,
        additionalAttachmentInfo: new AdditionalAttachmentInfoType(),
    );
})->throws(ValidationException::class);
