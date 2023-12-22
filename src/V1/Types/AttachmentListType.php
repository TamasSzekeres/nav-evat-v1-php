<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\NavApi\V3\Types\Annotations\ArrayValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Feltöltött mellékletek listája.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class AttachmentListType extends BaseType
{
    public function __construct(
        /**
         * @var array<int, AttachmentListItemType> Feltöltött melléklet elem.
         */
        #[ArrayValidation(itemType: AttachmentListItemType::class)]
        #[Type('array<LightSideSoftware\EVat\V1\Types\AttachmentListItemType>')]
        #[XmlList(entry: 'attachmentListItem', inline: true)]
        public array $attachmentListItems,
    ) {
        parent::__construct();
    }
}
