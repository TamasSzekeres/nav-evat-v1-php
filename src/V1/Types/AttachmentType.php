<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\EVat\V1\Types\Enums\AttachmentCategoryType;
use LightSideSoftware\NavApi\V3\Types\Annotations\EntityIdTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Csatolmányok.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class AttachmentType extends BaseType
{
    public function __construct(
        /**
         * @var string A melléklet feltöltésekor kapott azonosító.
         */
        #[EntityIdTypeValidation]
        #[XmlElement(cdata: false)]
        public string $claimCheckId,

        /**
         * @var AttachmentCategoryType Csatolmány típus.
         */
        public AttachmentCategoryType $attachmentCategory,

        /**
         * @var AdditionalAttachmentInfoType Csatolmány egyéb adatai.
         */
        public AdditionalAttachmentInfoType $additionalAttachmentInfo,
    ) {
        parent::__construct();
    }
}
