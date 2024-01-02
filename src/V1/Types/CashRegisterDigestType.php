<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use DateTimeImmutable;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxMonetaryTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxpointDateTypeValidation;
use LightSideSoftware\EVat\V1\Types\Enums\RegisterTypeType;
use LightSideSoftware\NavApi\V3\Types\Annotations\SimpleText15NotBlankTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Online pénztárgép kivonat lekérdezés eredménye.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class CashRegisterDigestType extends BaseType
{
    public function __construct(
        /**
         * @var DateTimeImmutable Adó esedékességi napja.
         */
        #[TaxpointDateTypeValidation]
        #[Type("DateTimeImmutable<'Y-m-d'>")]
        public DateTimeImmutable $taxpointDate,

        /**
         * @var string Pénztárgép azonosító száma (AP szám).
         */
        #[SimpleText15NotBlankTypeValidation]
        #[XmlElement(cdata: false)]
        public string $apNumber,

        /**
         * @var RegisterTypeType Pénztárgépi gyűjtő azonosítója.
         */
        #[Type("Enum<'LightSideSoftware\EVat\V1\Types\Enums\RegisterTypeType'>")]
        public RegisterTypeType $registerType,

        /**
         * @var float Alapbizonylat nettó összérték.
         */
        #[TaxMonetaryTypeValidation]
        public float $baseReceiptNetAmount,

        /**
         * @var float Stornó bizonylat nettó összérték.
         */
        #[TaxMonetaryTypeValidation]
        public float $stornoReceiptNetAmount,

        /**
         * @var float Visszáru bizonylat nettó összérték.
         */
        #[TaxMonetaryTypeValidation]
        public float $returnReceiptNetAmount,

        /**
         * @var float Alapbizonylat ÁFA összérték.
         */
        #[TaxMonetaryTypeValidation]
        public float $baseReceiptVatAmount,

        /**
         * @var float Stornó bizonylat ÁFA összérték.
         */
        #[TaxMonetaryTypeValidation]
        public float $stornoReceiptVatAmount,

        /**
         * @var float Visszáru bizonylat ÁFA összérték.
         */
        #[TaxMonetaryTypeValidation]
        public float $returnReceiptVatAmount,
    ) {
        parent::__construct();
    }
}
