<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for etypeInsurance EnumType
 */
class EtypeInsurance extends AbstractStructEnumBase
{
    /**
     * Constant for value 'byShipments'
     *
     * @return string 'byShipments'
     */
    public const VALUE_BY_SHIPMENTS = 'byShipments';
    /**
     * Constant for value 'byWeight'
     *
     * @return string 'byWeight'
     */
    public const VALUE_BY_WEIGHT = 'byWeight';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_BY_SHIPMENTS
     * @uses self::VALUE_BY_WEIGHT
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BY_SHIPMENTS,
            self::VALUE_BY_WEIGHT,
        ];
    }
}
