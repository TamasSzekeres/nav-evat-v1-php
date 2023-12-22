<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use LightSideSoftware\EVat\V1\Types\Annotations\CommunityVatNumberTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\SimpleText50NotBlankTypeValidation;

/**
 * Partner adószáma.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class PartnerTaxDataType extends BaseType
{
    public function __construct(
        /**
         * @var DomesticTaxDataType Belföldi adószám adatok.
         */
        public DomesticTaxDataType $domesticTaxData,

        /**
         * @var string Közösségi adószám.
         */
        #[CommunityVatNumberTypeValidation]
        public string $communityVatNumber,

        /**
         * @var string Harmadik országbeli adóazonosító.
         */
        #[SimpleText50NotBlankTypeValidation]
        public string $thirdStateTaxId,
    ) {
        parent::__construct();
    }
}
