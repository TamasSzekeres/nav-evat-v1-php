<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use LightSideSoftware\EVat\V1\Types\Enums\ReturnDecisionType;
use LightSideSoftware\EVat\V1\Types\Enums\TaxpayerStatusCodeType;

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
        public ?ReturnDecisionType $returnDecision = null,

        /**
         * @var ?TaxpayerStatusCodeType Csatolmány típus.
         */
        #[SkipWhenEmpty]
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
