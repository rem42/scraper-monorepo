<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EnumDeliveryTimeFrame EnumType
 */
class EnumDeliveryTimeFrame extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AM'
     *
     * @return string 'AM'
     */
    public const VALUE_AM = 'AM';
    /**
     * Constant for value 'PM'
     *
     * @return string 'PM'
     */
    public const VALUE_PM = 'PM';
    /**
     * Constant for value 'DY'
     *
     * @return string 'DY'
     */
    public const VALUE_DY = 'DY';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_AM
     * @uses self::VALUE_PM
     * @uses self::VALUE_DY
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AM,
            self::VALUE_PM,
            self::VALUE_DY,
        ];
    }
}
