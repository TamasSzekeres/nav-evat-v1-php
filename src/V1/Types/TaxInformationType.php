<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\NavApi\V3\Types\Annotations\ArrayValidation;
use LightSideSoftware\NavApi\V3\Types\Annotations\SimpleText50NotBlankTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Adózási adatok.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class TaxInformationType extends BaseType
{
    public function __construct(
        /**
         * @var string A tétel standard adókódja.
         */
        #[SimpleText50NotBlankTypeValidation]
        #[XmlElement(cdata: false)]
        public string $standardTaxCode,

        /**
         * @var string A tétel vállalati adókódja.
         */
        #[SimpleText50NotBlankTypeValidation]
        #[XmlElement(cdata: false)]
        public string $ownTaxCode,

        /**
         * @var array<int, TaxPositionType> A tétel adózási pozíciója.
         */
        #[ArrayValidation(maxItems: 2, itemType: TaxPositionType::class)]
        #[Type('array<LightSideSoftware\EVat\V1\Types\TaxPositionType>')]
        #[XmlList(entry: 'taxPosition', inline: true)]
        public array $taxPositions,
    ) {
        parent::__construct();
    }
}
