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
 * Részletes címadatok.
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
        'streetName',
        'publicPlaceCategory',
        'number',
        'building',
        'staircase',
        'floor',
        'door',
        'lotNumber',
    ],
)]
final readonly class DetailedAddressType extends BaseType
{
    public function __construct(
        /**
         * @var string Az országkód ISO 3166 alpha-2 szabvány szerint.
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
         * @var string Közterület neve.
         */
        #[SimpleText255NotBlankTypeValidation]
        #[XmlElement(cdata: false, namespace: 'http://schemas.nav.gov.hu/OSA/3.0/base')]
        public string $streetName,

        /**
         * @var string Közterület jellege.
         */
        #[SimpleText50NotBlankTypeValidation]
        #[XmlElement(cdata: false, namespace: 'http://schemas.nav.gov.hu/OSA/3.0/base')]
        public string $publicPlaceCategory,

        /**
         * @var ?string Tartomány kódja (amennyiben értelmezhető az adott országban) az ISO 3166-2 alpha 2 szabvány szerint.
         */
        #[SkipWhenEmpty]
        #[SimpleText50NotBlankTypeValidation]
        #[XmlElement(cdata: false, namespace: 'http://schemas.nav.gov.hu/OSA/3.0/base')]
        public ?string $region = null,

        /**
         * @var ?string Házszám.
         */
        #[SkipWhenEmpty]
        #[SimpleText50NotBlankTypeValidation]
        #[XmlElement(cdata: false, namespace: 'http://schemas.nav.gov.hu/OSA/3.0/base')]
        public ?string $number = null,

        /**
         * @var ?string Épület.
         */
        #[SkipWhenEmpty]
        #[SimpleText50NotBlankTypeValidation]
        #[XmlElement(cdata: false, namespace: 'http://schemas.nav.gov.hu/OSA/3.0/base')]
        public ?string $building = null,

        /**
         * @var ?string Lépcsőház.
         */
        #[SkipWhenEmpty]
        #[SimpleText50NotBlankTypeValidation]
        #[XmlElement(cdata: false, namespace: 'http://schemas.nav.gov.hu/OSA/3.0/base')]
        public ?string $staircase = null,

        /**
         * @var ?string Emelet.
         */
        #[SkipWhenEmpty]
        #[SimpleText50NotBlankTypeValidation]
        #[XmlElement(cdata: false, namespace: 'http://schemas.nav.gov.hu/OSA/3.0/base')]
        public ?string $floor = null,

        /**
         * @var ?string Ajtó.
         */
        #[SkipWhenEmpty]
        #[SimpleText50NotBlankTypeValidation]
        #[XmlElement(cdata: false, namespace: 'http://schemas.nav.gov.hu/OSA/3.0/base')]
        public ?string $door = null,

        /**
         * @var ?string Helyrajzi szám.
         */
        #[SkipWhenEmpty]
        #[SimpleText50NotBlankTypeValidation]
        #[XmlElement(cdata: false, namespace: 'http://schemas.nav.gov.hu/OSA/3.0/base')]
        public ?string $lotNumber = null,
    ) {
        parent::__construct();
    }
}
