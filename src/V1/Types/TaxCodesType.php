<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\AccessorOrder;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\EVat\V1\Types\Enums\SheetNameType;
use LightSideSoftware\NavApi\V3\Types\Annotations\ArrayValidation;
use LightSideSoftware\NavApi\V3\Types\Annotations\SimpleText50NotBlankTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Adókódok.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[AccessorOrder(
    order: 'custom',
    custom: [
        'standardTaxCode',
        'transactionCode',
        'mandatorySubpage',
        'payableTaxCode',
        'deductibleTaxCode',
        'taxCodeDescription',
        'declarationLineData',
    ],
)]
final readonly class TaxCodesType extends BaseType
{
    public function __construct(
        /**
         * @var string Standard adókód.
         */
        #[SimpleText50NotBlankTypeValidation]
        #[XmlElement(cdata: false)]
        public string $standardTaxCode,

        /**
         * @var string Tranzakció kód.
         */
        #[SimpleText50NotBlankTypeValidation]
        #[XmlElement(cdata: false)]
        public string $transactionCode,

        /**
         * @var bool Fizetendő adókód jelölése.
         */
        public bool $payableTaxCode,

        /**
         * @var bool Levonható adókód jelölése.
         */
        public bool $deductibleTaxCode,

        /**
         * @var array<int, TaxCodeDescriptionType> Adókód leírás.
         */
        #[ArrayValidation(minItems: 3, maxItems: 3, itemType: TaxCodeDescriptionType::class)]
        #[Type('array<LightSideSoftware\EVat\V1\Types\TaxCodeDescriptionType>')]
        #[XmlList(entry: 'taxCodeDescription', inline: true)]
        public array $taxCodeDescriptions,

        /**
         * @var ?SheetNameType Kötelező melléklap.
         */
        #[SkipWhenEmpty]
        #[Type("Enum<'LightSideSoftware\EVat\V1\Types\Enums\SheetNameType'>")]
        public ?SheetNameType $mandatorySubpage = null,

        /**
         * @var array<int, DeclarationLineDataType> Bevallási sor adatok.
         */
        #[ArrayValidation(itemType: DeclarationLineDataType::class)]
        #[Type('array<LightSideSoftware\EVat\V1\Types\DeclarationLineDataType>')]
        #[XmlList(entry: 'declarationLineData', inline: true)]
        public array $declarationLineData = [],
    ) {
        parent::__construct();
    }
}
