<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\Annotations\BarCodeTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\GenericUnsignedIntegerTypeValidation;
use LightSideSoftware\NavApi\V3\Types\Annotations\EntityIdTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Módosítás adatai.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class ModificationReferenceType extends BaseType
{
    public function __construct(
        /**
         * @var string A módosítással érintett bevallás feldolgozási azonosítója.
         */
        #[EntityIdTypeValidation]
        #[XmlElement(cdata: false)]
        public string $declarationReferenceId,

        /**
         * @var int A módosítás sorrendiségének jelzése.
         */
        #[GenericUnsignedIntegerTypeValidation]
        public int $declarationReferenceIndex,

        /**
         * @var ?int Hibásnak minősített bevallás vonalkódja.
         */
        #[BarCodeTypeValidation]
        #[SkipWhenEmpty]
        public ?int $barCodeReference = null,
    ) {
        parent::__construct();
    }
}
