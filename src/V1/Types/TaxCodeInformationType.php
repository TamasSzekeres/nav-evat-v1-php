<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\NavApi\V3\Types\Annotations\ArrayValidation;
use LightSideSoftware\NavApi\V3\Types\Annotations\LineNumberTypeValidation;
use LightSideSoftware\NavApi\V3\Types\Annotations\SimpleText50NotBlankTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Adókód adatok.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class TaxCodeInformationType extends BaseType
{
    public function __construct(
        /**
         * @var string A tétel standard adókódja.
         */
        #[SimpleText50NotBlankTypeValidation]
        public string $standardTaxCode,

        /**
         * @var array<int, TaxPositionType> A tétel adózási pozíciója.
         */
        #[ArrayValidation(minItems: 1, maxItems: 2, itemType: TaxPositionType::class)]
        #[Type('array<LightSideSoftware\EVat\V1\Types\TaxPositionType>')]
        #[XmlList(entry: 'taxPosition', inline: true)]
        public array $taxPositions,

        /**
         * @var int A tétel sorszáma.
         */
        #[LineNumberTypeValidation]
        public int $lineNumber,
    ) {
        parent::__construct();
    }
}
