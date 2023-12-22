<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldThreeDigitNumberTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Mezőgazdasági kompenzációs felár.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class AgriculturalCompensationPremiumType extends BaseType
{
    public function __construct(
        /**
         * @var ?int 7%-os mértékű kompenzáció darabszáma.
         */
        #[BevfeldThreeDigitNumberTypeValidation]
        #[SkipWhenEmpty]
        public ?int $sevenPercentCount = null,

        /**
         * @var ?int 12%-os mértékű kompenzáció darabszáma.
         */
        #[BevfeldThreeDigitNumberTypeValidation]
        #[SkipWhenEmpty]
        public ?int $twelvePercentCount = null,
    ) {
        parent::__construct();
    }
}
