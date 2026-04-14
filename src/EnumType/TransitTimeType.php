<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TransitTimeType EnumType
 */
class TransitTimeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'TransitTime_Default'
     *
     * @return string 'TransitTime_Default'
     */
    public const VALUE_TRANSIT_TIME_DEFAULT = 'TransitTime_Default';
    /**
     * Constant for value 'TransitTime_Predict'
     *
     * @return string 'TransitTime_Predict'
     */
    public const VALUE_TRANSIT_TIME_PREDICT = 'TransitTime_Predict';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_TRANSIT_TIME_DEFAULT
     * @uses self::VALUE_TRANSIT_TIME_PREDICT
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_TRANSIT_TIME_DEFAULT,
            self::VALUE_TRANSIT_TIME_PREDICT,
        ];
    }
}
