<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eLinkedType EnumType
 */
class ELinkedType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     *
     * @return string 'None'
     */
    public const VALUE_NONE = 'None';
    /**
     * Constant for value 'Consolidation'
     *
     * @return string 'Consolidation'
     */
    public const VALUE_CONSOLIDATION = 'Consolidation';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CONSOLIDATION
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_CONSOLIDATION,
        ];
    }
}
