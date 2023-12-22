<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldAdditionalAddressTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldCityTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldPostalCodeTypeValidation;

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
        public string $postalCode,

        /**
         * @var string Város.
         */
        #[BevfeldCityTypeValidation]
        public string $city,

        /**
         * @var string Közterület neve, jellege stb..
         */
        #[BevfeldAdditionalAddressTypeValidation]
        public string $additionalAddress,
    ) {
        parent::__construct();
    }
}
