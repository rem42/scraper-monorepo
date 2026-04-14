<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BcIdentifier EnumType
 */
class BcIdentifier extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Aztec'
     *
     * @return string 'Aztec'
     */
    public const VALUE_AZTEC = 'Aztec';
    /**
     * Constant for value 'Bic3'
     *
     * @return string 'Bic3'
     */
    public const VALUE_BIC_3 = 'Bic3';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_AZTEC
     * @uses self::VALUE_BIC_3
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_AZTEC,
            self::VALUE_BIC_3,
        ];
    }
}
