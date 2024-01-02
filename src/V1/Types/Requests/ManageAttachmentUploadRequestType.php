<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Requests;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\Enums\FileExtensionType;
use LightSideSoftware\NavApi\V3\Types\Annotations\SimpleText100NotBlankTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BasicHeaderType;
use LightSideSoftware\NavApi\V3\Types\CryptoType;
use LightSideSoftware\NavApi\V3\Types\SoftwareType;
use LightSideSoftware\NavApi\V3\Types\UserHeaderType;

/**
 * A POST /manageAttachmentUpload REST operáció kérés típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class ManageAttachmentUploadRequestType extends BasicEVatRequestType
{
    public function __construct(
        BasicHeaderType $header,
        UserHeaderType $user,
        SoftwareType $software,

        /**
         * @var string A feltöltött fájl melléklet neve.
         */
        #[SimpleText100NotBlankTypeValidation]
        #[XmlElement(cdata: false)]
        public string $fileName,

        /**
         * @var FileExtensionType A feltöltött fájl melléklet kiterjesztése.
         */
        #[Type("Enum<'LightSideSoftware\EVat\V1\Types\Enums\FileExtensionType'>")]
        public FileExtensionType $fileExtension,

        /**
         * @var CryptoType A feltöltött állományra számított hash algoritmus neve és értéke.
         */
        public CryptoType $contentHash,
    ) {
        parent::__construct($header, $user, $software);
    }
}
