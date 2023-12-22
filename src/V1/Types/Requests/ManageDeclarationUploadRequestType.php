<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Requests;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use LightSideSoftware\EVat\V1\Types\Annotations\GenericUnsignedIntegerTypeValidation;
use LightSideSoftware\EVat\V1\Types\AttachmentIdListType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationSchemaType;
use LightSideSoftware\NavApi\V3\Types\BasicHeaderType;
use LightSideSoftware\NavApi\V3\Types\CryptoType;
use LightSideSoftware\NavApi\V3\Types\SoftwareType;
use LightSideSoftware\NavApi\V3\Types\UserHeaderType;

/**
 * A POST /manageDeclarationUpload REST operáció kérés típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class ManageDeclarationUploadRequestType extends BasicEVatRequestType
{
    public function __construct(
        BasicHeaderType $header,
        UserHeaderType $user,
        SoftwareType $software,

        /**
         * @var int A feltöltendő állomány partícióinak száma.
         */
        #[GenericUnsignedIntegerTypeValidation]
        public int $partitionCount,

        /**
         * @var CryptoType A feltöltött állományra számított hash algoritmus neve és értéke.
         */
        public CryptoType $contentHash,

        /**
         * @var DeclarationSchemaType A feltöltött állomány bevallási sémája.
         */
        public DeclarationSchemaType $declarationSchema,

        /**
         * @var ?AttachmentIdListType Feltöltött melléklet id-k listája.
         */
        #[SkipWhenEmpty]
        public ?AttachmentIdListType $attachmentIdList = null,
    ) {
        parent::__construct($header, $user, $software);
    }
}
