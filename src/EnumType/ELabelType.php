<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eLabelType EnumType
 */
class ELabelType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Default'
     *
     * @return string 'Default'
     */
    public const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'PDF'
     *
     * @return string 'PDF'
     */
    public const VALUE_PDF = 'PDF';
    /**
     * Constant for value 'PDF_A6'
     *
     * @return string 'PDF_A6'
     */
    public const VALUE_PDF_A_6 = 'PDF_A6';
    /**
     * Constant for value 'ZPL'
     *
     * @return string 'ZPL'
     */
    public const VALUE_ZPL = 'ZPL';
    /**
     * Constant for value 'ZPL300'
     *
     * @return string 'ZPL300'
     */
    public const VALUE_ZPL_300 = 'ZPL300';
    /**
     * Constant for value 'ZPL_A6'
     *
     * @return string 'ZPL_A6'
     */
    public const VALUE_ZPL_A_6 = 'ZPL_A6';
    /**
     * Constant for value 'ZPL300_A6'
     *
     * @return string 'ZPL300_A6'
     */
    public const VALUE_ZPL_300_A_6 = 'ZPL300_A6';
    /**
     * Constant for value 'EPL'
     *
     * @return string 'EPL'
     */
    public const VALUE_EPL = 'EPL';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_PDF
     * @uses self::VALUE_PDF_A_6
     * @uses self::VALUE_ZPL
     * @uses self::VALUE_ZPL_300
     * @uses self::VALUE_ZPL_A_6
     * @uses self::VALUE_ZPL_300_A_6
     * @uses self::VALUE_EPL
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DEFAULT,
            self::VALUE_PDF,
            self::VALUE_PDF_A_6,
            self::VALUE_ZPL,
            self::VALUE_ZPL_300,
            self::VALUE_ZPL_A_6,
            self::VALUE_ZPL_300_A_6,
            self::VALUE_EPL,
        ];
    }
}
