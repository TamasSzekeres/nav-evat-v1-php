<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldAdditionalAddressTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldCityTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldPostalCodeTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Postai kiutalás adatai.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class PostalReturnType extends BaseType
{
    public function __construct(
        /**
         * @var string Irányítószám.
         */
        #[BevfeldPostalCodeTypeValidation]
        #[XmlElement(cdata: false)]
        public string $postalCode,

        /**
         * @var string Város.
         */
        #[BevfeldCityTypeValidation]
        #[XmlElement(cdata: false)]
        public string $city,

        /**
         * @var string Közterület neve, jellege stb..
         */
        #[BevfeldAdditionalAddressTypeValidation]
        #[XmlElement(cdata: false)]
        public string $additionalAddress,
    ) {
        parent::__construct();
    }
}
