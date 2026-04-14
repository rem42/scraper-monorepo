<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EnumCompanyCode EnumType
 */
class EnumCompanyCode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'C'
     *
     * @return string 'C'
     */
    public const VALUE_C = 'C';
    /**
     * Constant for value 'P'
     *
     * @return string 'P'
     */
    public const VALUE_P = 'P';
    /**
     * Constant for value 'T'
     *
     * @return string 'T'
     */
    public const VALUE_T = 'T';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_C
     * @uses self::VALUE_P
     * @uses self::VALUE_T
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_C,
            self::VALUE_P,
            self::VALUE_T,
        ];
    }
}
