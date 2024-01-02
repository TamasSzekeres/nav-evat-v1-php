<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationSchemaType;
use LightSideSoftware\NavApi\V3\Types\Annotations\AtomicStringType15Validation;
use LightSideSoftware\NavApi\V3\Types\Annotations\EntityIdTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Bevallási lista elem.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class DeclarationListItemType extends BaseType
{
    public function __construct(
        /**
         * @var string Feldolgozási azonosító.
         */
        #[EntityIdTypeValidation]
        #[XmlElement(cdata: false)]
        public string $declarationProcessingId,

        /**
         * @var DeclarationSchemaType A feltöltött állomány bevallási sémája.
         */
        #[Type("Enum<'LightSideSoftware\EVat\V1\Types\Enums\DeclarationSchemaType'>")]
        public DeclarationSchemaType $declarationSchema,

        /**
         * @var DeclarationInfoType A bevallás fejadatai.
         */
        public DeclarationInfoType $declarationInfo,

        /**
         * @var string A bevallás requestVersion értéke
         */
        #[AtomicStringType15Validation]
        #[XmlElement(cdata: false)]
        public string $originalRequestVersion,
    ) {
        parent::__construct();
    }
}
