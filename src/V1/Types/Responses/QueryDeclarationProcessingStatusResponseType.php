<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Responses;

use JMS\Serializer\Annotation\SkipWhenEmpty;
use LightSideSoftware\EVat\V1\Types\DeclarationProcessingStatusType;
use LightSideSoftware\NavApi\V3\Types\BasicHeaderType;
use LightSideSoftware\NavApi\V3\Types\BasicResultType;
use LightSideSoftware\NavApi\V3\Types\Responses\BasicResponseType;

/**
 * A POST /queryDeclarationProcessingStatusRequest REST operáció válasz típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class QueryDeclarationProcessingStatusResponseType extends BasicResponseType
{
    public function __construct(
        BasicHeaderType $header,
        BasicResultType $result,

        /**
         * @var ?DeclarationProcessingStatusType Bevallás feldolgozási állapota.
         */
        #[SkipWhenEmpty]
        public ?DeclarationProcessingStatusType $declarationProcessingStatus = null,
    ) {
        parent::__construct($header, $result);
    }
}
