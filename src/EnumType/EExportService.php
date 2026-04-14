<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eExportService EnumType
 */
class EExportService extends AbstractStructEnumBase
{
    /**
     * Constant for value 'CheckCountry'
     *
     * @return string 'CheckCountry'
     */
    public const VALUE_CHECK_COUNTRY = 'CheckCountry';
    /**
     * Constant for value 'OnlyNational'
     *
     * @return string 'OnlyNational'
     */
    public const VALUE_ONLY_NATIONAL = 'OnlyNational';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_CHECK_COUNTRY
     * @uses self::VALUE_ONLY_NATIONAL
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CHECK_COUNTRY,
            self::VALUE_ONLY_NATIONAL,
        ];
    }
}
