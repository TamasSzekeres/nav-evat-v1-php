<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\NavApi\V3\Types\Annotations\ArrayValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Feltöltött melléklet id-k listája.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class AttachmentIdListType extends BaseType
{
    public function __construct(
        /**
         * @var array<int, AttachmentIdListItemType> Feltöltött melléklet elem id.
         */
        #[ArrayValidation(itemType: AttachmentIdListItemType::class)]
        #[Type('array<LightSideSoftware\EVat\V1\Types\AttachmentIdListItemType>')]
        #[XmlList(entry: 'attachmentIdListItem', inline: true)]
        public array $attachmentIdListItems,
    ) {
        parent::__construct();
    }
}
