<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Responses;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\EVat\V1\Types\DeclarationDigestType;
use LightSideSoftware\EVat\V1\Types\TaxCodeInformationType;
use LightSideSoftware\NavApi\V3\Types\Annotations\ArrayValidation;
use LightSideSoftware\NavApi\V3\Types\BasicHeaderType;
use LightSideSoftware\NavApi\V3\Types\BasicResultType;
use LightSideSoftware\NavApi\V3\Types\Responses\BasicResponseType;

/**
 * A POST /queryCustomsDeclarationTaxCode REST operáció válasz típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class QueryCustomsDeclarationTaxCodeResponseType extends BasicResponseType
{
    public function __construct(
        BasicHeaderType $header,
        BasicResultType $result,

        /**
         * @var ?DeclarationDigestType Vámáru határozat kivonat lekérdezési eredmény.
         */
        public ?DeclarationDigestType $declarationDigest = null,

        /**
         * @var array<int, TaxCodeInformationType> Adókód adatok.
         */
        #[ArrayValidation(itemType: TaxCodeInformationType::class)]
        #[SkipWhenEmpty]
        #[Type('array<LightSideSoftware\EVat\V1\Types\TaxCodeInformationType>')]
        #[XmlList(entry: 'taxCodeInformation', inline: true, skipWhenEmpty: true)]
        public array $taxCodeInformations = [],
    ) {
        parent::__construct($header, $result);
    }
}
