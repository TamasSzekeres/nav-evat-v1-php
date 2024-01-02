<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use LightSideSoftware\EVat\V1\Types\Enums\ReturnDecisionType;
use LightSideSoftware\EVat\V1\Types\Enums\TaxpayerStatusCodeType;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Nyilatkozatok.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class DeclarationStatementsType extends BaseType
{
    public function __construct(
        /**
         * @var ?ReturnDecisionType Visszautalási döntésó.
         */
        #[SkipWhenEmpty]
        #[Type("Enum<'LightSideSoftware\EVat\V1\Types\Enums\ReturnDecisionType'>")]
        public ?ReturnDecisionType $returnDecision = null,

        /**
         * @var ?TaxpayerStatusCodeType Csatolmány típus.
         */
        #[SkipWhenEmpty]
        #[Type("Enum<'LightSideSoftware\EVat\V1\Types\Enums\TaxpayerStatusCodeType'>")]
        public ?TaxpayerStatusCodeType $taxpayerStatusCode = null,

        /**
         * @var ?ProcedureStatementsType Eljárási nyilatkozatok.
         */
        #[SkipWhenEmpty]
        public ?ProcedureStatementsType $procedureStatements = null,

        /**
         * @var ?ReturnStatementsType Eljárási nyilatkozatok.
         */
        #[SkipWhenEmpty]
        public ?ReturnStatementsType $returnStatements = null,
    ) {
        parent::__construct();
    }
}
