<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Responses;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * A POST /manageAttachmentUpload REST operáció válaszának root elementje.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[XmlRoot(name: 'ManageAttachmentUploadResponse')]
final readonly class ManageAttachmentUploadResponse extends ManageAttachmentUploadResponseType
{
}
