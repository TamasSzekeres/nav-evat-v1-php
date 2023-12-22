<?php

declare(strict_types=1);

namespace LightSideSoftware\EVat\V1\Types;

/**
 * Visszaigénylés módja.
 *
 * @author Szekeres Tamás <szektam2@gmail.com>
 */
final readonly class ReturnMethodType extends BaseType
{
    public function __construct(
        /**
         * @var DomesticPaymentServiceProviderType Belföldi pénzügyi szolgáltató adatai.
         */
        public DomesticPaymentServiceProviderType $domesticPaymentServiceProvider,

        /**
         * @var ForeignPaymentServiceProviderType Külföldi pénzügyi szolgáltató adatai.
         */
        public ForeignPaymentServiceProviderType $foreignPaymentServiceProvider,

        /**
         * @var PostalReturnType Postai kiutalás adatai.
         */
        public PostalReturnType $postalReturn,
    ) {
        parent::__construct();
    }
}
