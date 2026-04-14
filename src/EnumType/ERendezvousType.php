<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eRendezvousType EnumType
 */
class ERendezvousType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MissingRendezvous'
     *
     * @return string 'MissingRendezvous'
     */
    public const VALUE_MISSING_RENDEZVOUS = 'MissingRendezvous';
    /**
     * Constant for value 'NoRendezvous'
     *
     * @return string 'NoRendezvous'
     */
    public const VALUE_NO_RENDEZVOUS = 'NoRendezvous';
    /**
     * Constant for value 'Depot'
     *
     * @return string 'Depot'
     */
    public const VALUE_DEPOT = 'Depot';
    /**
     * Constant for value 'ParcelShop'
     *
     * @return string 'ParcelShop'
     */
    public const VALUE_PARCEL_SHOP = 'ParcelShop';
    /**
     * Constant for value 'NewDelivery'
     *
     * @return string 'NewDelivery'
     */
    public const VALUE_NEW_DELIVERY = 'NewDelivery';
    /**
     * Constant for value 'NewAddress'
     *
     * @return string 'NewAddress'
     */
    public const VALUE_NEW_ADDRESS = 'NewAddress';
    /**
     * Constant for value 'Predict'
     *
     * @return string 'Predict'
     */
    public const VALUE_PREDICT = 'Predict';
    /**
     * Constant for value 'SafePlace'
     *
     * @return string 'SafePlace'
     */
    public const VALUE_SAFE_PLACE = 'SafePlace';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_MISSING_RENDEZVOUS
     * @uses self::VALUE_NO_RENDEZVOUS
     * @uses self::VALUE_DEPOT
     * @uses self::VALUE_PARCEL_SHOP
     * @uses self::VALUE_NEW_DELIVERY
     * @uses self::VALUE_NEW_ADDRESS
     * @uses self::VALUE_PREDICT
     * @uses self::VALUE_SAFE_PLACE
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MISSING_RENDEZVOUS,
            self::VALUE_NO_RENDEZVOUS,
            self::VALUE_DEPOT,
            self::VALUE_PARCEL_SHOP,
            self::VALUE_NEW_DELIVERY,
            self::VALUE_NEW_ADDRESS,
            self::VALUE_PREDICT,
            self::VALUE_SAFE_PLACE,
        ];
    }
}
