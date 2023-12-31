<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\AccessorOrder;
use JMS\Serializer\Annotation\SkipWhenEmpty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\EVat\V1\Types\Annotations\SheetPageCountTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\VpidTypeValidation;
use LightSideSoftware\EVat\V1\Types\Enums\SheetNameType;
use LightSideSoftware\NavApi\V3\Types\Annotations\ArrayValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Melléklap.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[AccessorOrder(
    order: 'custom',
    custom: [
        'sheetName',
        'sheetPageCount',
        'vpid',
        'sheetField',
    ],
)]
final readonly class SheetType extends BaseType
{
    public function __construct(
        /**
         * @var SheetNameType Melléklap neve.
         */
        #[Type("Enum<'LightSideSoftware\EVat\V1\Types\Enums\SheetNameType'>")]
        public SheetNameType $sheetName,

        /**
         * @var int Melléklap oldalainak száma.
         */
        #[SheetPageCountTypeValidation]
        public int $sheetPageCount,

        /**
         * @var array<int, SheetFieldType> Melléklap mezői.
         */
        #[ArrayValidation(itemType: SheetFieldType::class)]
        #[Type('array<LightSideSoftware\EVat\V1\Types\SheetFieldType>')]
        #[XmlList(entry: 'sheetField', inline: true)]
        public array $sheetFields,

        /**
         * @var ?string VPID szám.
         */
        #[SkipWhenEmpty]
        #[VpidTypeValidation]
        #[XmlElement(cdata: false)]
        public ?string $vpid = null,
    ) {
        parent::__construct();
    }
}
