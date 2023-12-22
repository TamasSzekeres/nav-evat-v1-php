<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Responses;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\EVat\V1\Types\TaxCodeInformationType;
use LightSideSoftware\EVat\V1\Types\VatRelevantWarningType;
use LightSideSoftware\NavApi\V3\Types\Annotations\ArrayValidation;
use LightSideSoftware\NavApi\V3\Types\BasicHeaderType;
use LightSideSoftware\NavApi\V3\Types\BasicResultType;
use LightSideSoftware\NavApi\V3\Types\InvoiceDigestType;
use LightSideSoftware\NavApi\V3\Types\Responses\BasicResponseType;

/**
 * A POST /queryInvoiceTaxCode REST operáció válasz típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class QueryInvoiceTaxCodeResponseType extends BasicResponseType
{
    public function __construct(
        BasicHeaderType $header,
        BasicResultType $result,

        /**
         * @var ?InvoiceDigestType Számla kivonat lekérdezési eredmény.
         */
        public ?InvoiceDigestType $invoiceDigest = null,

        /**
         * @var array<int, TaxCodeInformationType> Adókód adatok.
         */
        #[ArrayValidation(itemType: TaxCodeInformationType::class)]
        #[SkipWhenEmpty]
        #[Type('array<LightSideSoftware\EVat\V1\Types\TaxCodeInformationType>')]
        #[XmlList(entry: 'taxCodeInformation', inline: true, skipWhenEmpty: true)]
        public array $taxCodeInformations = [],

        /**
         * @var array<int, VatRelevantWarningType> ÁFA szempontjából releváns figyelmeztetések.
         */
        #[ArrayValidation(itemType: VatRelevantWarningType::class)]
        #[SkipWhenEmpty]
        #[Type('array<LightSideSoftware\EVat\V1\Types\VatRelevantWarningType>')]
        #[XmlList(entry: 'vatRelevantWarning', inline: true, skipWhenEmpty: true)]
        public array $vatRelevantWarnings = [],
    ) {
        parent::__construct($header, $result);
    }
}
