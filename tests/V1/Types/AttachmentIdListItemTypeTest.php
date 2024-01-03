<?php

use LightSideSoftware\EVat\V1\Types\AttachmentIdListItemType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new AttachmentIdListItemType(
        claimCheckId: 'A57467457',
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new AttachmentIdListItemType(
        claimCheckId: 'A5746;7457',
    );
})->throws(ValidationException::class);
