<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Responses;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use LightSideSoftware\EVat\V1\Types\AttachmentListType;
use LightSideSoftware\NavApi\V3\Types\BasicHeaderType;
use LightSideSoftware\NavApi\V3\Types\BasicResultType;
use LightSideSoftware\NavApi\V3\Types\Responses\BasicResponseType;

/**
 * A POST /manageDeclarationFinalize REST operáció válasz típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class QueryAttachmentListResponseType extends BasicResponseType
{
    public function __construct(
        BasicHeaderType $header,
        BasicResultType $result,

        /**
         * @var ?AttachmentListType Feltöltött mellékletek listája.
         */
        #[SkipWhenEmpty]
        public ?AttachmentListType $attachmentList = null,
    ) {
        parent::__construct($header, $result);
    }
}
