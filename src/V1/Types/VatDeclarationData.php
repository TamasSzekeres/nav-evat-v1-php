<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

use JMS\Serializer\Annotation\XmlRoot;

/**
 * XML root element, az ÁFA bevallás adatait leíró típus.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
#[XmlRoot(name: 'VatDeclarationData')]
final readonly class VatDeclarationData extends VatDeclarationDataType
{
}
