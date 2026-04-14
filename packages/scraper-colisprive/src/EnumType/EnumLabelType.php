<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EnumLabelType EnumType
 */
class EnumLabelType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CP'
     *
     * @return string 'CP'
     */
    public const VALUE_CP = 'CP';
    /**
     * Constant for value 'TT'
     *
     * @return string 'TT'
     */
    public const VALUE_TT = 'TT';
    /**
     * Constant for value 'CE'
     *
     * @return string 'CE'
     */
    public const VALUE_CE = 'CE';
    /**
     * Constant for value 'CS'
     *
     * @return string 'CS'
     */
    public const VALUE_CS = 'CS';
    /**
     * Constant for value 'IP'
     *
     * @return string 'IP'
     */
    public const VALUE_IP = 'IP';
    /**
     * Constant for value 'RL'
     *
     * @return string 'RL'
     */
    public const VALUE_RL = 'RL';
    /**
     * Constant for value 'MR'
     *
     * @return string 'MR'
     */
    public const VALUE_MR = 'MR';
    /**
     * Constant for value 'RV'
     *
     * @return string 'RV'
     */
    public const VALUE_RV = 'RV';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_CP
     * @uses self::VALUE_TT
     * @uses self::VALUE_CE
     * @uses self::VALUE_CS
     * @uses self::VALUE_IP
     * @uses self::VALUE_RL
     * @uses self::VALUE_MR
     * @uses self::VALUE_RV
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CP,
            self::VALUE_TT,
            self::VALUE_CE,
            self::VALUE_CS,
            self::VALUE_IP,
            self::VALUE_RL,
            self::VALUE_MR,
            self::VALUE_RV,
        ];
    }
}
