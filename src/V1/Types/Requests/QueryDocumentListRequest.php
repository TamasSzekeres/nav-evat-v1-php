<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Requests;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * A POST /queryDocumentList REST operáció kérésének root elementje.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[XmlRoot(name: 'QueryDocumentListRequest')]
final readonly class QueryDocumentListRequest extends QueryDocumentListRequestType
{
}
