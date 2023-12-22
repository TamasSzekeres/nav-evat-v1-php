<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\AccessorOrder;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxMonetaryTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * A bevallás összegző adatai.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[AccessorOrder(
    order: 'custom',
    custom: [
        'sumResidualTax',
        'lapsedResidualTaxIndicator',
        'sumAccountedTax',
        'sumPayableTax',
        'sumDeductibleTax',
        'sumTransferableTax',
    ],
)]
final readonly class DeclarationSummaryType extends BaseType
{
    public function __construct(
        /**
         * @var float Tárgyidőszakban megállapított fizetendő adó együttes összegének és a levonható előzetesen felszámított adónak a különbözete.
         */
        #[TaxMonetaryTypeValidation]
        public float $sumAccountedTax,

        /**
         * @var ?float Előző időszakról beszámítható csökkentő tétel összege.
         */
        #[SkipWhenEmpty]
        #[TaxMonetaryTypeValidation]
        public ?float $sumResidualTax = null,

        /**
         * @var ?bool Előző időszakról beszámítható csökkentő tétel összege elévült követelést tartalmaz.
         */
        #[SkipWhenEmpty]
        public ?bool $lapsedResidualTaxIndicator = null,

        /**
         * @var ?float Befizetendő adó összege.
         */
        #[SkipWhenEmpty]
        #[TaxMonetaryTypeValidation]
        public ?float $sumPayableTax = null,

        /**
         * @var ?float Visszaigényelhető adó összege.
         */
        #[SkipWhenEmpty]
        #[TaxMonetaryTypeValidation]
        public ?float $sumDeductibleTax = null,

        /**
         * @var ?float Következő időszakra átvihető követelés összege.
         */
        #[SkipWhenEmpty]
        #[TaxMonetaryTypeValidation]
        public ?float $sumTransferableTax = null,
    ) {
        parent::__construct();
    }
}
