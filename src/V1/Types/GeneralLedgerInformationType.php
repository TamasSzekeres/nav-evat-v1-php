<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use DateTimeImmutable;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlList;
use LightSideSoftware\EVat\V1\Types\Annotations\ArrayValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\SimpleText512NotBlankTypeValidation;
use LightSideSoftware\EVat\V1\Types\Annotations\TaxpointDateTypeValidation;

/**
 * Főkönyvi adatok.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class GeneralLedgerInformationType extends BaseType
{
    public function __construct(
        /**
         * @var array<int, string> Főkönyvi számlaszám.
         */
        #[ArrayValidation(maxItems: 2, itemValidation: new SimpleText512NotBlankTypeValidation())]
        #[Type('array<string>')]
        #[XmlList(entry: 'glAccountId', inline: true)]
        public array $glAccountId,

        /**
         * @var DateTimeImmutable Főkönyvi feladás dátuma.
         */
        #[TaxpointDateTypeValidation]
        public DateTimeImmutable $glPostingDate,

        /**
         * @var string Főkönyvi könyvelés egyedi azonosítója.
         */
        #[SimpleText512NotBlankTypeValidation]
        public string $glTransactionId,
    ) {
        parent::__construct();
    }
}
