<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for eBic3Mode EnumType
 */
class EBic3Mode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OnlyStdLabels'
     *
     * @return string 'OnlyStdLabels'
     */
    public const VALUE_ONLY_STD_LABELS = 'OnlyStdLabels';
    /**
     * Constant for value 'OnlyBic3'
     *
     * @return string 'OnlyBic3'
     */
    public const VALUE_ONLY_BIC_3 = 'OnlyBic3';
    /**
     * Constant for value 'All'
     *
     * @return string 'All'
     */
    public const VALUE_ALL = 'All';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_ONLY_STD_LABELS
     * @uses self::VALUE_ONLY_BIC_3
     * @uses self::VALUE_ALL
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ONLY_STD_LABELS,
            self::VALUE_ONLY_BIC_3,
            self::VALUE_ALL,
        ];
    }
}
