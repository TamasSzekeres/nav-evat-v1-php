<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\SkipWhenEmpty;

/**
 * Csatolmány egyéb adatai.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class AdditionalAttachmentInfoType extends BaseType
{
    public function __construct(
        /**
         * @var ?FactoringContractDataType Faktorálási szerződés adatai.
         */
        #[SkipWhenEmpty]
        public ?FactoringContractDataType $factoringContractData = null,
    ) {
        parent::__construct();
    }
}
