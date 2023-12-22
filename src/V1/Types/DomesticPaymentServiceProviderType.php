<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use LightSideSoftware\EVat\V1\Types\Annotations\BankAccountNumberTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldText80TypeValidation;

/**
 * Belföldi pénzügyi szolgáltató adatai.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class DomesticPaymentServiceProviderType extends BaseType
{
    public function __construct(
        /**
         * @var string Belföldi szolgáltató neve.
         */
        #[BevfeldText80TypeValidation]
        public string $domesticProviderName,

        /**
         * @var string Belföldi számlaszám.
         */
        #[BankAccountNumberTypeValidation]
        public string $domesticBankAccountNumber,
    ) {
        parent::__construct();
    }
}
