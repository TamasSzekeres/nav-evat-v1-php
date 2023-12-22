<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldText80TypeValidation;
use LightSideSoftware\NavApi\V3\Types\Annotations\BankAccountNumberTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

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
        #[XmlElement(cdata: false)]
        public string $domesticProviderName,

        /**
         * @var string Belföldi számlaszám.
         */
        #[BankAccountNumberTypeValidation]
        #[XmlElement(cdata: false)]
        public string $domesticBankAccountNumber,
    ) {
        parent::__construct();
    }
}
