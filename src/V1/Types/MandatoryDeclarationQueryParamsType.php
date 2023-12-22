<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use DateTimeImmutable;
use JMS\Serializer\Annotation\Type;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxpointDateTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Vámáru határozat lekérdezés kötelező paraméterei.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class MandatoryDeclarationQueryParamsType extends BaseType
{
    public function __construct(
        /**
         * @var DateTimeImmutable Vámáru határozat kiállításának nagyobb vagy egyenlő paramétere.
         */
        #[TaxpointDateTypeValidation]
        #[Type("DateTimeImmutable<'Y-m-d'>")]
        public DateTimeImmutable $declarationDateFrom,

        /**
         * @var DateTimeImmutable Vámáru határozat kiállításának kisebb vagy egyenlő paramétere.
         */
        #[TaxpointDateTypeValidation]
        #[Type("DateTimeImmutable<'Y-m-d'>")]
        public DateTimeImmutable $declarationDateTo,
    ) {
        parent::__construct();
    }
}
