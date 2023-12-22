<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use LightSideSoftware\EVat\V1\Types\Annotations\EntityIdTypeValidation;
use LightSideSoftware\EVat\V1\Types\Enums\AttachmentCategoryType;

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
