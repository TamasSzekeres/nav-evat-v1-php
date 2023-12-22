<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\AccessorOrder;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationSchemaType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationStatusType;
use LightSideSoftware\NavApi\V3\Types\Annotations\ArrayValidation;
use LightSideSoftware\NavApi\V3\Types\Annotations\AtomicStringType15Validation;
use LightSideSoftware\NavApi\V3\Types\Annotations\EntityIdTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;
use LightSideSoftware\NavApi\V3\Types\BusinessValidationResultType;
use LightSideSoftware\NavApi\V3\Types\CryptoType;
use LightSideSoftware\NavApi\V3\Types\TechnicalValidationResultType;

/**
 * Bevallás feldolgozási állapota.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[AccessorOrder(
    order: 'custom',
    custom: [
        'declarationInfo',
        'declarationStatus',
        'technicalValidationMessages',
        'businessValidationMessages',
        'declarationUploadId',
        'contentHash',
        'declarationSchema',
        'originalRequestVersion',
    ],
)]
final readonly class DeclarationProcessingStatusType extends BaseType
{
    public function __construct(
        /**
         * @var DeclarationStatusType A bevallás feldolgozási státusza.
         */
        public DeclarationStatusType $declarationStatus,

        /**
         * @var string Feltöltési azonosító.
         */
        #[EntityIdTypeValidation]
        #[XmlElement(cdata: false)]
        public string $declarationUploadId,

        /**
         * @var CryptoType A feltöltött állományra számított hash algoritmus neve és értéke
         */
        public CryptoType $contentHash,

        /**
         * @var DeclarationSchemaType A feltöltött állomány bevallási sémája.
         */
        public DeclarationSchemaType $declarationSchema,

        /**
         * @var string A bevallás requestVersion értéke
         */
        #[AtomicStringType15Validation]
        #[XmlElement(cdata: false)]
        public string $originalRequestVersion,

        /**
         * @var ?DeclarationInfoType A bevallás fejadatai
         */
        public ?DeclarationInfoType $declarationInfo = null,

        /**
         * @var array<int, TechnicalValidationResultType> Technikai validációs üzenetek.
         */
        #[ArrayValidation(itemType: TechnicalValidationResultType::class)]
        #[SkipWhenEmpty]
        #[Type('array<LightSideSoftware\EVat\V1\Types\TechnicalValidationResultType>')]
        #[XmlList(entry: 'technicalValidationMessage', inline: true, skipWhenEmpty: true)]
        public array $technicalValidationMessages = [],

        /**
         * @var array<int, BusinessValidationResultType> Üzleti validációs üzenetek.
         */
        #[ArrayValidation(itemType: BusinessValidationResultType::class)]
        #[SkipWhenEmpty]
        #[Type('array<LightSideSoftware\EVat\V1\Types\BusinessValidationResultType>')]
        #[XmlList(entry: 'businessValidationMessages', inline: true, skipWhenEmpty: true)]
        public array $businessValidationMessages = [],
    ) {
        parent::__construct();
    }
}
