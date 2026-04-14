<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RdvShipmentDataSearchMode EnumType
 */
class RdvShipmentDataSearchMode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SearchByParcelNumber'
     *
     * @return string 'SearchByParcelNumber'
     */
    public const VALUE_SEARCH_BY_PARCEL_NUMBER = 'SearchByParcelNumber';
    /**
     * Constant for value 'SearchByAvisDePassage'
     *
     * @return string 'SearchByAvisDePassage'
     */
    public const VALUE_SEARCH_BY_AVIS_DE_PASSAGE = 'SearchByAvisDePassage';
    /**
     * Constant for value 'SearchByToken'
     *
     * @return string 'SearchByToken'
     */
    public const VALUE_SEARCH_BY_TOKEN = 'SearchByToken';
    /**
     * Constant for value 'SearchByBIC3'
     *
     * @return string 'SearchByBIC3'
     */
    public const VALUE_SEARCH_BY_BIC_3 = 'SearchByBIC3';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_SEARCH_BY_PARCEL_NUMBER
     * @uses self::VALUE_SEARCH_BY_AVIS_DE_PASSAGE
     * @uses self::VALUE_SEARCH_BY_TOKEN
     * @uses self::VALUE_SEARCH_BY_BIC_3
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SEARCH_BY_PARCEL_NUMBER,
            self::VALUE_SEARCH_BY_AVIS_DE_PASSAGE,
            self::VALUE_SEARCH_BY_TOKEN,
            self::VALUE_SEARCH_BY_BIC_3,
        ];
    }
}
