<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\Annotations\SheetFieldNameTypeValidation;
use LightSideSoftware\NavApi\V3\Types\Annotations\SimpleText512NotBlankTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Melléklap mezői.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class SheetFieldType extends BaseType
{
    public function __construct(
        /**
         * @var string A melléklapon szereplő BEVFELD mező azonosítója.
         */
        #[SheetFieldNameTypeValidation]
        #[XmlElement(cdata: false)]
        public string $sheetFieldName,

        /**
         * @var string A melléklapon szereplő BEVFELD mező értéke.
         */
        #[SimpleText512NotBlankTypeValidation]
        #[XmlElement(cdata: false)]
        public string $sheetFieldValue,
    ) {
        parent::__construct();
    }
}
