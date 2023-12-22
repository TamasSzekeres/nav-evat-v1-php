<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldForeignAccountTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldText80TypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\SwiftCodeTypeValidation;
use LightSideSoftware\NavApi\V3\Types\Annotations\CountryCodeTypeValidation;
use LightSideSoftware\NavApi\V3\Types\Annotations\CurrencyTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Külföldi pénzügyi szolgáltató adatai.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class ForeignPaymentServiceProviderType extends BaseType
{
    public function __construct(
        /**
         * @var string Külföldi pénzügyi szolgáltató nevem.
         */
        #[BevfeldText80TypeValidation]
        #[XmlElement(cdata: false)]
        public string $foreignProviderName,

        /**
         * @var string Külföldi pénzügyi szolgáltató címe.
         */
        #[BevfeldText80TypeValidation]
        #[XmlElement(cdata: false)]
        public string $foreignProviderAddress,

        /**
         * @var string Külföldi számla tulajdonosának neve.
         */
        #[BevfeldText80TypeValidation]
        #[XmlElement(cdata: false)]
        public string $foreignBankAccountOwnerName,

        /**
         * @var string Külföldi számla száma.
         */
        #[BevfeldForeignAccountTypeValidation]
        #[XmlElement(cdata: false)]
        public string $foreignBankAccountNumber,

        /**
         * @var bool IBAN számlaszám jelölés.
         */
        public bool $ibanIndicator,

        /**
         * @var string SWIFT kód.
         */
        #[SwiftCodeTypeValidation]
        #[XmlElement(cdata: false)]
        public string $swiftCode,

        /**
         * @var string Országkód.
         */
        #[CountryCodeTypeValidation]
        #[XmlElement(cdata: false)]
        public string $countryCode,

        /**
         * @var string A számla pénzneme az ISO 4217 szabvány szerint.
         */
        #[CurrencyTypeValidation]
        #[XmlElement(cdata: false)]
        public string $currencyCode,
    ) {
        parent::__construct();
    }
}
