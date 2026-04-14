<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for etypeReverse EnumType
 */
class EtypeReverse extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OnDemand'
     *
     * @return string 'OnDemand'
     */
    public const VALUE_ON_DEMAND = 'OnDemand';
    /**
     * Constant for value 'Prepared'
     *
     * @return string 'Prepared'
     */
    public const VALUE_PREPARED = 'Prepared';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_ON_DEMAND
     * @uses self::VALUE_PREPARED
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ON_DEMAND,
            self::VALUE_PREPARED,
        ];
    }
}
