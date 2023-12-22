<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxPayerIdTypeValidation;

/**
 * Belföldi adószám adatok.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class DomesticTaxDataType extends BaseType
{
    public function __construct(
        /**
         * @var string Az adószám 8 jegyű törzsszáma.
         */
        #[TaxPayerIdTypeValidation]
        public string $taxNumber,

        /**
         * @var ?string Csoport tag adószámának 8 jegyű törzsszáma.
         */
        #[SkipWhenEmpty]
        #[TaxPayerIdTypeValidation]
        public ?string $groupMemberTaxNumber = null,
    ) {
        parent::__construct();
    }
}
