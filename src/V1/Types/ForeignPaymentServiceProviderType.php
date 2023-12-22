<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use DateTimeImmutable;
use JMS\Serializer\Annotation\AccessorOrder;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldForeignAccountTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldText80TypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\CountryCodeTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\CurrencyTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\GenericUnsignedIntegerTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\SwiftCodeTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxpointDateTypeValidation;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationFrequencyType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationKindType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationTypeType;

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
        public string $foreignProviderName,

        /**
         * @var string Külföldi pénzügyi szolgáltató címe.
         */
        #[BevfeldText80TypeValidation]
        public string $foreignProviderAddress,

        /**
         * @var string Külföldi számla tulajdonosának neve.
         */
        #[BevfeldText80TypeValidation]
        public string $foreignBankAccountOwnerName,

        /**
         * @var string Külföldi számla száma.
         */
        #[BevfeldForeignAccountTypeValidation]
        public string $foreignBankAccountNumber,

        /**
         * @var bool IBAN számlaszám jelölés.
         */
        public bool $ibanIndicator,

        /**
         * @var string SWIFT kód.
         */
        #[SwiftCodeTypeValidation]
        public string $swiftCode,

        /**
         * @var string Országkód.
         */
        #[CountryCodeTypeValidation]
        public string $countryCode,

        /**
         * @var string A számla pénzneme az ISO 4217 szabvány szerint.
         */
        #[CurrencyTypeValidation]
        public string $currencyCode,
    ) {
        parent::__construct();
    }
}
