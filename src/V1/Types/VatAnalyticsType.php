<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\NavApi\V3\Types\Annotations\ArrayValidation;
use LightSideSoftware\NavApi\V3\Types\Annotations\IntegerValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * ÁFA analitika.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class VatAnalyticsType extends BaseType
{
    public function __construct(
        /**
         * @var int Az analitika sorainak száma.
         */
        #[IntegerValidation(minInclusive: 0)]
        public int $totalRowCount,

        /**
         * @var ?AgriculturalCompensationPremiumType Mezőgazdasági kompenzációs felár.
         */
        #[SkipWhenEmpty]
        public ?AgriculturalCompensationPremiumType $agriculturalCompensationPremium = null,

        /**
         * @var array<int, VatAnalyticsItemType> Analitika tételsor adatai.
         */
        #[ArrayValidation(itemType: VatAnalyticsItemType::class)]
        #[SkipWhenEmpty]
        #[Type('array<LightSideSoftware\EVat\V1\Types\VatAnalyticsItemType>')]
        #[XmlList(entry: 'vatAnalyticsItem', inline: true)]
        public array $vatAnalyticsItems = [],
    ) {
        parent::__construct();
    }
}
