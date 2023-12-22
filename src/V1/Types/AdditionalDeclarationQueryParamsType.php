<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use LightSideSoftware\EVat\V1\Types\Enums\DeclarationOperationType;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Vámáru határozat lekérdezés kiegészítő paraméterei.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class AdditionalDeclarationQueryParamsType extends BaseType
{
    public function __construct(
        /**
         * @var DeclarationOperationType A vámáru határozat típusa.
         */
        public DeclarationOperationType $declarationOperation,

        /**
         * @var bool Szűrés csak azon vámáru határozatokra, amelyben importőr és közvetett vámjogi képviselő is szerepel.
         */
        public bool $returnDualAgentDeclarationsOnly,
    ) {
        parent::__construct();
    }
}
