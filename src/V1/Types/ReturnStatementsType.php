<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\AccessorOrder;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Kiutalási rendelkezések.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[AccessorOrder(
    order: 'custom',
    custom: [
        'returnMethod',
        'publicLlcIndicator',
        'expediteReturnIndicator',
    ],
)]
final readonly class ReturnStatementsType extends BaseType
{
    public function __construct(
        /**
         * @var bool Nyilvánosan működő részvénytársaság jelölése.
         */
        public bool $publicLlcIndicator,

        /**
         * @var bool Nyilatkozat az Art. 64.§ (3) bek. szerint.
         */
        public bool $expediteReturnIndicator,

        /**
         * @var ?ReturnMethodType Visszaigénylés módja.
         */
        #[SkipWhenEmpty]
        public ?ReturnMethodType $returnMethod = null,
    ) {
        parent::__construct();
    }
}
