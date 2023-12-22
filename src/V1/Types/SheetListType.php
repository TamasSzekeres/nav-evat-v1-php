<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\EVat\V1\Types\Annotations\ArrayValidation;

/**
 * Melléklapok.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class SheetListType extends BaseType
{
    public function __construct(
        /**
         * @var array<int, SheetType> Melléklap.
         */
        #[ArrayValidation(maxItems: 9, itemType: SheetType::class)]
        #[Type('array<LightSideSoftware\EVat\V1\Types\SheetType>')]
        #[XmlList(entry: 'sheet', inline: true, skipWhenEmpty: false)]
        public array $sheets,
    ) {
        parent::__construct();
    }
}
