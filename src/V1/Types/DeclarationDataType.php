<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\AccessorOrder;
use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationSchemaType;
use LightSideSoftware\NavApi\V3\Types\Annotations\AtomicStringType15Validation;
use LightSideSoftware\NavApi\V3\Types\BaseType;
use LightSideSoftware\NavApi\V3\Types\CryptoType;

/**
 * Bevallási adatok.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[AccessorOrder(
    order: 'custom',
    custom: [
        'declarationInfo',
        'contentHash',
        'declarationSchema',
        'declarationSummary',
        'BevfeldData',
        'originalRequestVersion',
    ],
)]
final readonly class DeclarationDataType extends BaseType
{
    public function __construct(
        /**
         * @var DeclarationInfoType A bevallás fejadatai.
         */
        public DeclarationInfoType $declarationInfo,

        /**
         * @var CryptoType A feltöltött állományra számított hash algoritmus neve és értéke.
         */
        public CryptoType $contentHash,

        /**
         * @var DeclarationSchemaType A feltöltött állomány bevallási sémája.
         */
        public DeclarationSchemaType $declarationSchema,

        /**
         * @var DeclarationSummaryType A bevallás összegző adatai.
         */
        public DeclarationSummaryType $declarationSummary,

        /**
         * @var string A bevallás requestVersion értéke.
         */
        #[AtomicStringType15Validation]
        public string $originalRequestVersion,

        /**
         * @var ?string Az ÁFA analitika alapján összeállított BEVFELD XML adatai.
         */
        #[XmlElement(cdata: false)]
        public ?string $BevfeldData = null,
    ) {
        parent::__construct();
    }
}
