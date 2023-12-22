<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Requests;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * A POST /queryDeclarationProcessingStatus REST operáció kérésének root elementje.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[XmlRoot(name: 'QueryDeclarationProcessingStatusRequest')]
final readonly class QueryDeclarationProcessingStatusRequest extends QueryDeclarationProcessingStatusRequestType
{
}
