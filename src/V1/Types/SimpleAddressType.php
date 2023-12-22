<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\AccessorOrder;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\Annotations\CountryCodeTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\PostalCodeTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\SimpleText255NotBlankTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\SimpleText50NotBlankTypeValidation;

/**
 * Egyszerű címtípus.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[AccessorOrder(
    order: 'custom',
    custom: [
        'countryCode',
        'region',
        'postalCode',
        'city',
        'additionalAddressDetail',
    ],
)]
final readonly class SimpleAddressType extends BaseType
{
    public function __construct(
        /**
         * @var string Az országkód az ISO 3166 alpha-2 szabvány szerint.
         */
        #[CountryCodeTypeValidation]
        #[XmlElement(cdata: false, namespace: 'http://schemas.nav.gov.hu/OSA/3.0/base')]
        public string $countryCode,

        /**
         * @var string Irányítószám (amennyiben nem értelmezhető, 0000 értékkel kell kitölteni).
         */
        #[PostalCodeTypeValidation]
        #[XmlElement(cdata: false, namespace: 'http://schemas.nav.gov.hu/OSA/3.0/base')]
        public string $postalCode,

        /**
         * @var string Település.
         */
        #[SimpleText255NotBlankTypeValidation]
        #[XmlElement(cdata: false, namespace: 'http://schemas.nav.gov.hu/OSA/3.0/base')]
        public string $city,

        /**
         * @var string További címadatok (pl. közterület neve és jellege, házszám, emelet, ajtó, helyrajzi szám, stb.).
         */
        #[SimpleText255NotBlankTypeValidation]
        #[XmlElement(cdata: false, namespace: 'http://schemas.nav.gov.hu/OSA/3.0/base')]
        public string $additionalAddressDetail,

        /**
         * @var ?string Tartomány kódja (amennyiben értelmezhető az adott országban) az ISO 3166-2 alpha 2 szabvány szerint.
         */
        #[SkipWhenEmpty]
        #[SimpleText50NotBlankTypeValidation]
        #[XmlElement(cdata: false, namespace: 'http://schemas.nav.gov.hu/OSA/3.0/base')]
        public ?string $region = null,
    ) {
        parent::__construct();
    }
}
