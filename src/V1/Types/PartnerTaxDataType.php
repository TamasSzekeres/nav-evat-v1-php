<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\NavApi\V3\Types\Annotations\CommunityVatNumberTypeValidation;
use LightSideSoftware\NavApi\V3\Types\Annotations\SimpleText50NotBlankTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

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
        #[XmlElement(cdata: false)]
        public string $communityVatNumber,

        /**
         * @var string Harmadik országbeli adóazonosító.
         */
        #[SimpleText50NotBlankTypeValidation]
        #[XmlElement(cdata: false)]
        public string $thirdStateTaxId,
    ) {
        parent::__construct();
    }
}
