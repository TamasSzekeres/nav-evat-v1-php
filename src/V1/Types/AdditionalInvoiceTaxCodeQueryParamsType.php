<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Számla lekérdezés adókódokkal és ÁFA releváns warnokkal kiegészítő paraméterei.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class AdditionalInvoiceTaxCodeQueryParamsType extends BaseType
{
    public function __construct(
        /**
         * @var ?bool Számla tételenkénti adókódok igénylésének paramétere.
         */
        #[SkipWhenEmpty]
        public ?bool $claimCheckId = null,
    ) {
        parent::__construct();
    }
}
