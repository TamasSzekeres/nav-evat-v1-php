<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxMonetaryTypeValidation;
use LightSideSoftware\EVat\V1\Types\Enums\PositionTypeType;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * A tétel adózási pozíciója.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class TaxPositionType extends BaseType
{
    public function __construct(
        /**
         * @var PositionTypeType Adózási pozíció.
         */
        #[Type("Enum<'LightSideSoftware\EVat\V1\Types\Enums\PositionTypeType'>")]
        public PositionTypeType $positionType,

        /**
         * @var float Adó alapja.
         */
        #[TaxMonetaryTypeValidation]
        public float $taxBase,

        /**
         * @var float Adó összege.
         */
        #[TaxMonetaryTypeValidation]
        public float $taxAmount,

        /**
         * @var ?DeductionOptionsType Levonási adatok.
         */
        #[SkipWhenEmpty]
        public ?DeductionOptionsType $deductionOptions = null,
    ) {
        parent::__construct();
    }
}
