<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use DateTimeImmutable;
use JMS\Serializer\Annotation\AccessorOrder;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\Annotations\DeclarationBaseDateTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxMonetaryTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxPayerIdTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxpointDateTypeValidation;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationOperationType;
use LightSideSoftware\NavApi\V3\Types\Annotations\EntityIdTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Vámáru határozat kivonat lekérdezési eredményei.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[AccessorOrder(
    order: 'custom',
    custom: [
        'cdpsId',
        'resolutionId',
        'declarationOperation',
        'importerTaxNumber',
        'indirectRepresentativeTaxNumber',
        'importerSelfTaxationIndicator',
        'indirectRepresentativeSelfTaxationIndicator',
        'taxpointDate',
        'deliveryDate',
        'totalNetAmount',
        'totalVatAmount',
    ],
)]
final readonly class DeclarationDigestType extends BaseType
{
    public function __construct(
        /**
         * @var string A vámáru határozat egyedi azonosítója.
         */
        #[EntityIdTypeValidation]
        #[XmlElement(cdata: false)]
        public string $cdpsId,

        /**
         * @var string Határozatszám.
         */
        #[EntityIdTypeValidation]
        #[XmlElement(cdata: false)]
        public string $resolutionId,

        /**
         * @var DeclarationOperationType A vámáru határozat típusa.
         */
        public DeclarationOperationType $declarationOperation,

        /**
         * @var string Importőr adószáma.
         */
        #[TaxPayerIdTypeValidation]
        #[XmlElement(cdata: false)]
        public string $importerTaxNumber,

        /**
         * @var bool Importőr önadózásának jelölése.
         */
        public bool $importerSelfTaxationIndicator,

        /**
         * @var DateTimeImmutable Adó esedékességi napja.
         */
        #[TaxpointDateTypeValidation]
        #[Type("DateTimeImmutable<'Y-m-d'>")]
        public DateTimeImmutable $taxpointDate,

        /**
         * @var DateTimeImmutable A vámáru határozat kézbesítésének dátuma.
         */
        #[DeclarationBaseDateTypeValidation]
        #[Type("DateTimeImmutable<'Y-m-d'>")]
        public DateTimeImmutable $deliveryDate,

        /**
         * @var float Vámáru adóalap.
         */
        #[TaxMonetaryTypeValidation]
        public float $totalNetAmount,

        /**
         * @var float Vámáru adóösszeg
         */
        #[TaxMonetaryTypeValidation]
        public float $totalVatAmount,

        /**
         * @var ?string Közvetett vámjogi képviselő adószáma.
         */
        #[SkipWhenEmpty]
        #[TaxPayerIdTypeValidation]
        #[XmlElement(cdata: false)]
        public ?string $indirectRepresentativeTaxNumber = null,

        /**
         * @var ?bool Közvetett vámjogi képviselő önadózásának jelölése.
         */
        #[SkipWhenEmpty]
        public ?bool $indirectRepresentativeSelfTaxationIndicator = null,
    ) {
        parent::__construct();
    }
}
