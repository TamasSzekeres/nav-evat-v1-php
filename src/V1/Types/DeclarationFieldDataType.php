<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\Enums\FieldTypeType;
use LightSideSoftware\NavApi\V3\Types\Annotations\SimpleText15NotBlankTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Bevallási mező adatok.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class DeclarationFieldDataType extends BaseType
{
    public function __construct(
        /**
         * @var string Bevallási mező azonosítója
         */
        #[SimpleText15NotBlankTypeValidation]
        #[XmlElement(cdata: false)]
        public string $fieldId,

        /**
         * @var FieldTypeType Bevallási mező típusa.
         */
        public FieldTypeType $fieldType,
    ) {
        parent::__construct();
    }
}
