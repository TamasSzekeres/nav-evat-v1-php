<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\AccessorOrder;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use LightSideSoftware\EVat\V1\Types\Enums\OutOfTurnDeclarationCodeType;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Eljárási nyilatkozatok.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[AccessorOrder(
    order: 'custom',
    custom: [
        'thresholdExceededIndicator',
        'interimFrequencyChangeIndicator',
        'midYearCommunityTaxNumberIndicator',
        'outOfTurnDeclarationCode',
        'becomesLiveAgainIndicator',
        'animalDiseaseDefermentIndicator',
        'taxLiabilityBesideExemptmentIndicator',
    ],
)]
final readonly class ProcedureStatementsType extends BaseType
{
    public function __construct(
        /**
         * @var bool Küszöbérték túllépés jelölése éves adózó esetén.
         */
        public bool $thresholdExceededIndicator,

        /**
         * @var bool Adóhatósági engedéllyel évközi gyakoriság váltás jelölése.
         */
        public bool $interimFrequencyChangeIndicator,

        /**
         * @var bool Közösségi adószám évközi megállapítása miatt törtidőszaki bevallás jelölése éves adózó esetén.
         */
        public bool $midYearCommunityTaxNumberIndicator,

        /**
         * @var bool Eljárás végén újra élővé válás jelölése.
         */
        public bool $becomesLiveAgainIndicator,

        /**
         * @var bool Állatbetegséggel összefüggő járványügyi intézkedés miatti kártalanítás okán fizetési halasztás kérése.
         */
        public bool $animalDiseaseDefermentIndicator,

        /**
         * @var bool Mentes státusz mellett adókötelezettsége keletkezett.
         */
        public bool $taxLiabilityBesideExemptmentIndicator,

        /**
         * @var ?OutOfTurnDeclarationCodeType Mentes státusz mellett adókötelezettsége keletkezett.
         */
        #[SkipWhenEmpty]
        #[Type("Enum<'LightSideSoftware\EVat\V1\Types\Enums\OutOfTurnDeclarationCodeType'>")]
        public ?OutOfTurnDeclarationCodeType $outOfTurnDeclarationCode = null,
    ) {
        parent::__construct();
    }
}
