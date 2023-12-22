<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Requests;

use LightSideSoftware\EVat\V1\Types\AdditionalInvoiceTaxCodeQueryParamsType;
use LightSideSoftware\NavApi\V3\Types\BasicHeaderType;
use LightSideSoftware\NavApi\V3\Types\InvoiceNumberQueryType;
use LightSideSoftware\NavApi\V3\Types\SoftwareType;
use LightSideSoftware\NavApi\V3\Types\UserHeaderType;

/**
 * A POST /queryInvoiceTaxCode REST operáció kérés típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class QueryInvoiceTaxCodeRequestType extends BasicEVatRequestType
{
    public function __construct(
        BasicHeaderType $header,
        UserHeaderType $user,
        SoftwareType $software,

        /**
         * @var InvoiceNumberQueryType Számla lekérdezés számlaszám paramétere.
         */
        public InvoiceNumberQueryType $invoiceNumberQuery,

        /**
         * @var AdditionalInvoiceTaxCodeQueryParamsType Számla lekérdezés adókódokkal és ÁFA releváns warnokkal kiegészítő paraméterei.
         */
        public AdditionalInvoiceTaxCodeQueryParamsType $additionalInvoiceTaxCodeQueryParams,
    ) {
        parent::__construct($header, $user, $software);
    }
}
