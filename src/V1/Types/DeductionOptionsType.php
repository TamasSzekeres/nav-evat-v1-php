<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\AccessorOrder;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxMonetaryTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxRateTypeValidation;

/**
 * Levonási adatok.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[AccessorOrder(
    order: 'custom',
    custom: [
        'deductionRate',
        'deductionAmount',
    ],
)]
final readonly class DeductionOptionsType extends BaseType
{
    public function __construct(
        /**
         * @var float Levonási összeg.
         */
        #[TaxMonetaryTypeValidation]
        public float $deductionAmount,

        /**
         * @var ?float Levonási hányados.
         */
        #[SkipWhenEmpty]
        #[TaxRateTypeValidation]
        public ?float $deductionRate = null,
    ) {
        parent::__construct();
    }
}
