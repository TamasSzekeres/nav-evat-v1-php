<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\Type;
use LightSideSoftware\EVat\V1\Types\Enums\LocalizationType;
use LightSideSoftware\NavApi\V3\Types\Annotations\SimpleText512NotBlankTypeValidation;
use LightSideSoftware\NavApi\V3\Types\BaseType;

/**
 * Adókód leírás.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class TaxCodeDescriptionType extends BaseType
{
    public function __construct(
        /**
         * @var LocalizationType Leírás nyelve.
         */
        #[Type("Enum<'LightSideSoftware\EVat\V1\Types\Enums\LocalizationType'>")]
        public LocalizationType $localization,

        /**
         * @var string Leírás.
         */
        #[SimpleText512NotBlankTypeValidation]
        public string $description,
    ) {
        parent::__construct();
    }
}
