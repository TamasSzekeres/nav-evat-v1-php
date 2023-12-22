<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use InvalidArgumentException;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * Cím típus, amely vagy egyszerű, vagy részletes címet tartalmaz.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[XmlNamespace(uri: 'http://schemas.nav.gov.hu/OSA/3.0/base')]
#[XmlRoot('AddressType')]
final readonly class AddressType extends BaseType
{
    public function __construct(
        /**
         * @var ?SimpleAddressType Egyszerű cím.
         */
        #[SkipWhenEmpty]
        #[XmlElement(namespace: 'http://schemas.nav.gov.hu/OSA/3.0/base')]
        public ?SimpleAddressType $simpleAddress = null,

        /**
         * @var ?DetailedAddressType Részletes cím.
         */
        #[SkipWhenEmpty]
        #[XmlElement(namespace: 'http://schemas.nav.gov.hu/OSA/3.0/base')]
        public ?DetailedAddressType $detailedAddress = null,
    ) {
        if (
            is_null($this->simpleAddress)
            && is_null($this->detailedAddress)
        ) {
            throw new InvalidArgumentException('"simpleAddress" és "detailedAddress" paraméterek közül az egyiket meg kell adni.');
        }

        if (
            ($this->simpleAddress instanceof SimpleAddressType)
            && ($this->detailedAddress instanceof DetailedAddressType)
        ) {
            throw new InvalidArgumentException('"simpleAddress" és "detailedAddress" paraméterek közül csak az egyiket lehet megadni.');
        }

        parent::__construct();
    }
}
