<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use LightSideSoftware\EVat\V1\Types\Annotations\SimpleText512NotBlankTypeValidation;
use LightSideSoftware\EVat\V1\Types\Enums\PartnerStatusType;

/**
 * Partner adatok.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class PartnerInfoType extends BaseType
{
    public function __construct(
        /**
         * @var PartnerStatusType Partner ÁFA szerinti státusza.
         */
        public PartnerStatusType $partnerStatus,

        /**
         * @var ?PartnerTaxDataType Partner adószáma.
         */
        #[SkipWhenEmpty]
        public ?PartnerTaxDataType $partnerTaxData = null,

        /**
         * @var ?string Partner neve.
         */
        #[SimpleText512NotBlankTypeValidation]
        #[SkipWhenEmpty]
        public ?string $partnerName = null,

        /**
         * @var ?AddressType Partner címadatai.
         */
        #[SkipWhenEmpty]
        public ?AddressType $partnerAddress = null,
    ) {
        parent::__construct();
    }
}
