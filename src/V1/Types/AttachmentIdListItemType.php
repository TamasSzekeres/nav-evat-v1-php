<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\XmlElement;
use LightSideSoftware\NavApi\V3\Types\Annotations\EntityIdTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Feltöltött melléklet elem id.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class AttachmentIdListItemType extends BaseType
{
    public function __construct(
        /**
         * @var string A melléklet feltöltésekor kapott azonosító.
         */
        #[EntityIdTypeValidation]
        #[XmlElement(cdata: false)]
        public string $claimCheckId,
    ) {
        parent::__construct();
    }
}
