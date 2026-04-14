<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eLabelDataOptions EnumType
 */
class ELabelDataOptions extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Default'
     *
     * @return string 'Default'
     */
    public const VALUE_DEFAULT = 'Default';
    /**
     * Constant for value 'Images'
     *
     * @return string 'Images'
     */
    public const VALUE_IMAGES = 'Images';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_DEFAULT
     * @uses self::VALUE_IMAGES
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DEFAULT,
            self::VALUE_IMAGES,
        ];
    }
}
