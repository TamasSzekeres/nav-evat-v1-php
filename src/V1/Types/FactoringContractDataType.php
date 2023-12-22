<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use DateTimeImmutable;
use InvalidArgumentException;
use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldText40TypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\DeclarationBaseDateTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxMonetaryTypeValidation;
use LightSideSoftware\EVat\V1\Types\Enums\FactoringTaxCodeType;

use function is_null;

/**
 * Faktorálási szerződés adatai.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class FactoringContractDataType extends BaseType
{
    public function __construct(
        /**
         * @var string Faktorálási szerződés száma.
         */
        #[BevfeldText40TypeValidation]
        public string $factoringContractNumber,

        /**
         * @var DateTimeImmutable Faktorálási szerződés kelte.
         */
        #[DeclarationBaseDateTypeValidation]
        public DateTimeImmutable $factoringContractDate,

        /**
         * @var FactoringTaxCodeType Adónem.
         */
        public FactoringTaxCodeType $factoringTaxCode,

        /**
         * @var float Faktorált összeg.
         */
        #[TaxMonetaryTypeValidation]
        public float $factoringAmount,

        /**
         * @var ?DomesticPaymentServiceProviderType Belföldi pénzügyi szolgáltató adatai.
         */
        public ?DomesticPaymentServiceProviderType $domesticPaymentServiceProvider = null,

        /**
         * @var ?ForeignPaymentServiceProviderType Külföldi pénzügyi szolgáltató adatai.
         */
        public ?ForeignPaymentServiceProviderType $foreignPaymentServiceProvider = null,
    ) {
        if (
            is_null($this->domesticPaymentServiceProvider)
            && is_null($this->foreignPaymentServiceProvider)
        ) {
            throw new InvalidArgumentException('A "domesticPaymentServiceProvider" és "foreignPaymentServiceProvider" paraméterek közül legalább egyet meg kell adni.');
        }

        if (
            ($this->domesticPaymentServiceProvider instanceof DomesticPaymentServiceProviderType)
            && ($this->foreignPaymentServiceProvider instanceof ForeignPaymentServiceProviderType)
        ) {
            throw new InvalidArgumentException('A "domesticPaymentServiceProvider" és "foreignPaymentServiceProvider" paraméterek közül legfeljebb egyet lehet megadni.');
        }

        parent::__construct();
    }
}
