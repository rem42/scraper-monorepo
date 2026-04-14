<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EnumLabelFormat EnumType
 */
class EnumLabelFormat extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PDF_DEFAUT'
     *
     * @return string 'PDF_DEFAUT'
     */
    public const VALUE_PDF_DEFAUT = 'PDF_DEFAUT';
    /**
     * Constant for value 'PDF_ZEBRA'
     *
     * @return string 'PDF_ZEBRA'
     */
    public const VALUE_PDF_ZEBRA = 'PDF_ZEBRA';
    /**
     * Constant for value 'ZPL_200'
     *
     * @return string 'ZPL_200'
     */
    public const VALUE_ZPL_200 = 'ZPL_200';
    /**
     * Constant for value 'ZPL_300'
     *
     * @return string 'ZPL_300'
     */
    public const VALUE_ZPL_300 = 'ZPL_300';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_PDF_DEFAUT
     * @uses self::VALUE_PDF_ZEBRA
     * @uses self::VALUE_ZPL_200
     * @uses self::VALUE_ZPL_300
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PDF_DEFAUT,
            self::VALUE_PDF_ZEBRA,
            self::VALUE_ZPL_200,
            self::VALUE_ZPL_300,
        ];
    }
}
