<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types\Responses;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * A POST /queryVatDeclarationData REST operáció válaszának root elementje.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[XmlRoot(name: 'QueryVatDeclarationDataResponse')]
final readonly class QueryVatDeclarationDataResponse extends QueryVatDeclarationDataResponseType
{
}
