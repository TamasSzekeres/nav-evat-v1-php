<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Requests;

use LightSideSoftware\NavApi\V3\Types\BasicHeaderType;
use LightSideSoftware\NavApi\V3\Types\Requests\BasicRequestType;
use LightSideSoftware\NavApi\V3\Types\SoftwareType;
use LightSideSoftware\NavApi\V3\Types\UserHeaderType;

/**
 * Alap kérés adatok.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class BasicEVatRequestType extends BasicRequestType
{
    public function __construct(
        BasicHeaderType $header,
        UserHeaderType $user,

        /**
         * @var SoftwareType Az ügyviteli program adatai
         */
        public SoftwareType $software,
    ) {
        parent::__construct($header, $user);
    }
}
