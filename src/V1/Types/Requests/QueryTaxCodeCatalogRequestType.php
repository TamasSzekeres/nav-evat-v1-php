<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Requests;

use DateTimeImmutable;
use JMS\Serializer\Annotation\Type;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxpointDateTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BasicHeaderType;
use LightSideSoftware\NavApi\V3\Types\SoftwareType;
use LightSideSoftware\NavApi\V3\Types\UserHeaderType;

/**
 * A POST /queryTaxCodeCatalog REST operáció kérés típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class QueryTaxCodeCatalogRequestType extends BasicEVatRequestType
{
    public function __construct(
        BasicHeaderType $header,
        UserHeaderType $user,
        SoftwareType $software,

        /**
         * @var DateTimeImmutable Az adókód katalógus időbeli hatálya.
         */
        #[TaxpointDateTypeValidation]
        #[Type("DateTimeImmutable<'Y-m-d'>")]
        public DateTimeImmutable $taxpointDate,
    ) {
        parent::__construct($header, $user, $software);
    }
}
