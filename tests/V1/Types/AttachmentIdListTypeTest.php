<?php

use LightSideSoftware\EVat\V1\Types\AttachmentIdListItemType;
use LightSideSoftware\EVat\V1\Types\AttachmentIdListType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new AttachmentIdListType(
        attachmentIdListItems: [
            new AttachmentIdListItemType(
                claimCheckId: 'ID4365634',
            ),
        ],
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new AttachmentIdListType(
        attachmentIdListItems: [false],
    );
})->throws(ValidationException::class);
