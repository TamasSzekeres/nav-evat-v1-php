<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use DateTimeImmutable;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\EVat\V1\Types\Enums\QueryResultStatusType;
use LightSideSoftware\NavApi\V3\Types\Annotations\ArrayValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;
use LightSideSoftware\NavApi\V3\Types\InvoiceDigestType;

/**
 * Bizonylat lista lekérdezési eredmények.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class DocumentListType extends BaseType
{
    public function __construct(
        /**
         * @var QueryResultStatusType Lekérdezés feldolgozási státusza.
         */
        public QueryResultStatusType $queryResultStatus,

        /**
         * @var ?DateTimeImmutable A lekérdezési eredmény elérhetőségének kezdő időpontja
         */
        #[SkipWhenEmpty]
        #[Type("DateTimeImmutable<'Y-m-d\TH:i:s.v\Z'>")]
        public ?DateTimeImmutable $queryResultAvailableFrom = null,

        /**
         * @var ?DateTimeImmutable A lekérdezési eredmény elérhetőségének végső időpontja.
         */
        #[SkipWhenEmpty]
        #[Type("DateTimeImmutable<'Y-m-d\TH:i:s.v\Z'>")]
        public ?DateTimeImmutable $queryResultAvailableTo = null,

        /**
         * @var array<int, InvoiceDigestType> Számla kivonat lekérdezési eredmény.
         */
        #[ArrayValidation(itemType: InvoiceDigestType::class)]
        #[Type('array<LightSideSoftware\EVat\V1\Types\InvoiceDigestType>')]
        #[XmlList(entry: 'invoiceDigest', inline: true, skipWhenEmpty: true)]
        public array $invoiceDigests = [],

        /**
         * @var array<int, CashRegisterDigestType> Online pénztárgép kivonat lekérdezés eredménye.
         */
        #[ArrayValidation(itemType: CashRegisterDigestType::class)]
        #[Type('array<LightSideSoftware\EVat\V1\Types\CashRegisterDigestType>')]
        #[XmlList(entry: 'cashRegisterDigest', inline: true, skipWhenEmpty: true)]
        public array $cashRegisterDigests = [],

        /**
         * @var array<int, DeclarationDigestType>
         */
        #[ArrayValidation(itemType: DeclarationDigestType::class)]
        #[Type('array<LightSideSoftware\EVat\V1\Types\DeclarationDigestType>')]
        #[XmlList(entry: 'declarationDigest', inline: true, skipWhenEmpty: true)]
        public array $declarationDigests = [],
    ) {
        parent::__construct();
    }
}
