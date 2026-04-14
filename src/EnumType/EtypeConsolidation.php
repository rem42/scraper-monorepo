<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for etypeConsolidation EnumType
 */
class EtypeConsolidation extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CombinedDelivery'
     *
     * @return string 'CombinedDelivery'
     */
    public const VALUE_COMBINED_DELIVERY = 'CombinedDelivery';
    /**
     * Constant for value 'CombinedInvoicing'
     *
     * @return string 'CombinedInvoicing'
     */
    public const VALUE_COMBINED_INVOICING = 'CombinedInvoicing';
    /**
     * Constant for value 'CombinedDeliveryAndInvoicing'
     *
     * @return string 'CombinedDeliveryAndInvoicing'
     */
    public const VALUE_COMBINED_DELIVERY_AND_INVOICING = 'CombinedDeliveryAndInvoicing';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_COMBINED_DELIVERY
     * @uses self::VALUE_COMBINED_INVOICING
     * @uses self::VALUE_COMBINED_DELIVERY_AND_INVOICING
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_COMBINED_DELIVERY,
            self::VALUE_COMBINED_INVOICING,
            self::VALUE_COMBINED_DELIVERY_AND_INVOICING,
        ];
    }
}
