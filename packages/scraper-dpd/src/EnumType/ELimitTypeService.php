<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eLimitTypeService EnumType
 */
class ELimitTypeService extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoLimit'
     *
     * @return string 'NoLimit'
     */
    public const VALUE_NO_LIMIT = 'NoLimit';
    /**
     * Constant for value 'ServiceValue'
     *
     * @return string 'ServiceValue'
     */
    public const VALUE_SERVICE_VALUE = 'ServiceValue';
    /**
     * Constant for value 'AttributeValue'
     *
     * @return string 'AttributeValue'
     */
    public const VALUE_ATTRIBUTE_VALUE = 'AttributeValue';
    /**
     * Constant for value 'NumberOfParcels'
     *
     * @return string 'NumberOfParcels'
     */
    public const VALUE_NUMBER_OF_PARCELS = 'NumberOfParcels';
    /**
     * Constant for value 'Weight'
     *
     * @return string 'Weight'
     */
    public const VALUE_WEIGHT = 'Weight';
    /**
     * Constant for value 'CutOff'
     *
     * @return string 'CutOff'
     */
    public const VALUE_CUT_OFF = 'CutOff';
    /**
     * Constant for value 'Validity'
     *
     * @return string 'Validity'
     */
    public const VALUE_VALIDITY = 'Validity';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_NO_LIMIT
     * @uses self::VALUE_SERVICE_VALUE
     * @uses self::VALUE_ATTRIBUTE_VALUE
     * @uses self::VALUE_NUMBER_OF_PARCELS
     * @uses self::VALUE_WEIGHT
     * @uses self::VALUE_CUT_OFF
     * @uses self::VALUE_VALIDITY
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NO_LIMIT,
            self::VALUE_SERVICE_VALUE,
            self::VALUE_ATTRIBUTE_VALUE,
            self::VALUE_NUMBER_OF_PARCELS,
            self::VALUE_WEIGHT,
            self::VALUE_CUT_OFF,
            self::VALUE_VALIDITY,
        ];
    }
}
