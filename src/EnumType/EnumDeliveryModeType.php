<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EnumDeliveryModeType EnumType
 */
class EnumDeliveryModeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'domicile'
     *
     * @return string 'domicile'
     */
    public const VALUE_DOMICILE = 'domicile';
    /**
     * Constant for value 'tiers'
     *
     * @return string 'tiers'
     */
    public const VALUE_TIERS = 'tiers';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_DOMICILE
     * @uses self::VALUE_TIERS
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DOMICILE,
            self::VALUE_TIERS,
        ];
    }
}
