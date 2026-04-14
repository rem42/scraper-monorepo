<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ServiceNoticeType EnumType
 */
class ServiceNoticeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'pick'
     *
     * @return string 'pick'
     */
    public const VALUE_PICK = 'pick';
    /**
     * Constant for value 'dely'
     *
     * @return string 'dely'
     */
    public const VALUE_DELY = 'dely';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_PICK
     * @uses self::VALUE_DELY
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PICK,
            self::VALUE_DELY,
        ];
    }
}
