<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Responses;

use LightSideSoftware\NavApi\V3\Types\Annotations\EntityIdTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BasicHeaderType;
use LightSideSoftware\NavApi\V3\Types\BasicResultType;
use LightSideSoftware\NavApi\V3\Types\Responses\BasicResponseType;

/**
 * A POST /queryDocumentList REST operáció válasz típusa.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
abstract readonly class QueryDocumentListResponseType extends BasicResponseType
{
    public function __construct(
        BasicHeaderType $header,
        BasicResultType $result,

        /**
         * @var string Lekérdezési azonosító.
         */
        #[EntityIdTypeValidation]
        public string $queryId,
    ) {
        parent::__construct($header, $result);
    }
}
