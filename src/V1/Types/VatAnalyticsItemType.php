<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use DateTimeImmutable;
use JMS\Serializer\Annotation\AccessorOrder;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\EVat\V1\Types\Annotations\ArrayValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\DeclarationBaseDateTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\GenericUnsignedIntegerTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\SimpleText50NotBlankTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxpointDateTypeValidation;
use LightSideSoftware\EVat\V1\Types\Enums\SourceDocumentTypeType;

/**
 * Analitika tételsor adatai.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[AccessorOrder(
    order: 'custom',
    custom: [
        'lineNumber',
        'generalLedgerInformation',
        'sourceDocumentId',
        'sourceDocumentIssueDate',
        'sourceDocumentType',
        'taxpointDate',
        'partnerInfo',
        'taxInformation',
    ],
)]
final readonly class VatAnalyticsItemType extends BaseType
{
    public function __construct(
        /**
         * @var int Analitika sorszáma.
         */
        #[GenericUnsignedIntegerTypeValidation]
        public int $lineNumber,

        /**
         * @var string Forrás dokumentum egyedi azonosítója.
         */
        #[SimpleText50NotBlankTypeValidation]
        public string $sourceDocumentId,

        /**
         * @var DateTimeImmutable Forrás dokumentum kiállítási dátuma.
         */
        #[DeclarationBaseDateTypeValidation]
        public DateTimeImmutable $sourceDocumentIssueDate,

        /**
         * @var DateTimeImmutable Adó esedékességi napja.
         */
        #[TaxpointDateTypeValidation]
        public DateTimeImmutable $taxpointDate,

        /**
         * @var PartnerInfoType Partner adatok.
         */
        public PartnerInfoType $partnerInfo,

        /**
         * @var array<int, TaxInformationType> Adózási adatok.
         */
        #[ArrayValidation(itemType: TaxInformationType::class)]
        #[Type('array<LightSideSoftware\EVat\V1\Types\TaxInformationType>')]
        #[XmlList(entry: 'taxInformation', inline: true)]
        public array $taxInformations,

        /**
         * @var ?GeneralLedgerInformationType Főkönyvi adatok.
         */
        #[SkipWhenEmpty]
        public ?GeneralLedgerInformationType $generalLedgerInformation = null,

        /**
         * @var ?SourceDocumentTypeType Forrás dokumentum bizonylat típusa.
         */
        #[SkipWhenEmpty]
        public ?SourceDocumentTypeType $sourceDocumentType = null,
    ) {
        parent::__construct();
    }
}
