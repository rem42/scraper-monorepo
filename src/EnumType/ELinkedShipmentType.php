<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eLinkedShipmentType EnumType
 */
class ELinkedShipmentType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Slave'
     *
     * @return string 'Slave'
     */
    public const VALUE_SLAVE = 'Slave';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_SLAVE
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SLAVE,
        ];
    }
}
