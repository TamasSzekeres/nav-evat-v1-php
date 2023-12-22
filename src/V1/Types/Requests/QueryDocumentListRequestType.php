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
 * A POST /queryDocumentList REST operáció kérés típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class QueryDocumentListRequestType extends BasicEVatRequestType
{
    public function __construct(
        BasicHeaderType $header,
        UserHeaderType $user,
        SoftwareType $software,

        /**
         * @var DateTimeImmutable Adózási intervallum kisebb vagy egyenlő paramétere.
         */
        #[TaxpointDateTypeValidation]
        #[Type("DateTimeImmutable<'Y-m-d'>")]
        public DateTimeImmutable $taxpointDateFrom,

        /**
         * @var DateTimeImmutable Adózási intervallum nagyobb vagy egyenlő paramétere.
         */
        #[TaxpointDateTypeValidation]
        #[Type("DateTimeImmutable<'Y-m-d'>")]
        public DateTimeImmutable $taxpointDateTo,
    ) {
        parent::__construct($header, $user, $software);
    }
}
