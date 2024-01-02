<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use DateTimeImmutable;
use JMS\Serializer\Annotation\AccessorOrder;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\Annotations\GenericUnsignedIntegerTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxpointDateTypeValidation;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationFrequencyType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationKindType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationTypeType;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * A bevallás fejadatai.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[AccessorOrder(
    order: 'custom',
    custom: [
        'modificationReference',
        'taxNumber',
        'declarationType',
        'declarationKind',
        'declarationFrequency',
        'declarationPeriodStart',
        'declarationPeriodEnd',
        'version',
    ],
)]
final readonly class DeclarationInfoType extends BaseType
{
    public function __construct(
        /**
         * @var string Adószám.
         */
        #[XmlElement(cdata: false)]
        public string $taxNumber,

        /**
         * @var DeclarationTypeType Bevallás típusa.
         */
        #[Type("Enum<'LightSideSoftware\EVat\V1\Types\Enums\DeclarationTypeType'>")]
        public DeclarationTypeType $declarationType,

        /**
         * @var DeclarationKindType Bevallás fajtája.
         */
        #[Type("Enum<'LightSideSoftware\EVat\V1\Types\Enums\DeclarationKindType'>")]
        public DeclarationKindType $declarationKind,

        /**
         * @var DeclarationFrequencyType Bevallási gyakoriság.
         */
        #[Type("Enum<'LightSideSoftware\EVat\V1\Types\Enums\DeclarationFrequencyType'>")]
        public DeclarationFrequencyType $declarationFrequency,

        /**
         * @var DateTimeImmutable Bevallási időszak kezdete.
         */
        #[TaxpointDateTypeValidation]
        #[Type("DateTimeImmutable<'Y-m-d'>")]
        public DateTimeImmutable $declarationPeriodStart,

        /**
         * @var DateTimeImmutable Bevallási időszak vége.
         */
        #[TaxpointDateTypeValidation]
        #[Type("DateTimeImmutable<'Y-m-d'>")]
        public DateTimeImmutable $declarationPeriodEnd,

        /**
         * @var int A benyújtott bevallás verziószáma.
         */
        #[GenericUnsignedIntegerTypeValidation]
        public int $version,

        /**
         * @var ?ModificationReferenceType Módosítás adatai.
         */
        #[SkipWhenEmpty]
        public ?ModificationReferenceType $modificationReference = null,
    ) {
        parent::__construct();
    }
}
