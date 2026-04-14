<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AddressType EnumType
 */
class AddressType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'StandardAddress'
     *
     * @return string 'StandardAddress'
     */
    public const VALUE_STANDARD_ADDRESS = 'StandardAddress';
    /**
     * Constant for value 'PickupAddress'
     *
     * @return string 'PickupAddress'
     */
    public const VALUE_PICKUP_ADDRESS = 'PickupAddress';
    /**
     * Constant for value 'ReturnAddress'
     *
     * @return string 'ReturnAddress'
     */
    public const VALUE_RETURN_ADDRESS = 'ReturnAddress';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_STANDARD_ADDRESS
     * @uses self::VALUE_PICKUP_ADDRESS
     * @uses self::VALUE_RETURN_ADDRESS
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_STANDARD_ADDRESS,
            self::VALUE_PICKUP_ADDRESS,
            self::VALUE_RETURN_ADDRESS,
        ];
    }
}
