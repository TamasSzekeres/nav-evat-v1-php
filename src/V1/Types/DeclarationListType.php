<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\NavApi\V3\Types\Annotations\ArrayValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Bevallások listája.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class DeclarationListType extends BaseType
{
    public function __construct(
        /**
         * @var array<int, DeclarationListItemType> Bevallási lista elem.
         */
        #[ArrayValidation(itemType: DeclarationListItemType::class)]
        #[Type('array<LightSideSoftware\EVat\V1\Types\DeclarationListItemType>')]
        #[XmlList(entry: 'declarationListItem', inline: true)]
        public array $declarationListItems,
    ) {
        parent::__construct();
    }
}
