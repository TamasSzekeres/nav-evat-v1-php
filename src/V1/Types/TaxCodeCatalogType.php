<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use DateTimeImmutable;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxpointDateTypeValidation;
use LightSideSoftware\NavApi\V3\Types\Annotations\ArrayValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Adókód katalógus adatok.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class TaxCodeCatalogType extends BaseType
{
    public function __construct(

        /**
         * @var DateTimeImmutable Adókód katalógus érvényességének kezdete.
         */
        #[TaxpointDateTypeValidation]
        #[Type("DateTimeImmutable<'Y-m-d'>")]
        public DateTimeImmutable $validFrom,

        /**
         * @var DateTimeImmutable Adókód katalógus érvényességének vége.
         */
        #[TaxpointDateTypeValidation]
        #[Type("DateTimeImmutable<'Y-m-d'>")]
        public DateTimeImmutable $validTo,

        /**
         * @var array<int, TaxCodesType> Adókódok.
         */
        #[ArrayValidation(itemType: TaxCodesType::class)]
        #[SkipWhenEmpty]
        #[Type('array<LightSideSoftware\EVat\V1\Types\TaxCodesType>')]
        #[XmlList(entry: 'taxCodes', inline: true, skipWhenEmpty: true)]
        public array $taxCodes = [],
    ) {
        parent::__construct();
    }
}
