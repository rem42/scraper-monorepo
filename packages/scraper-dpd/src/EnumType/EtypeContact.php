<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for etypeContact EnumType
 */
class EtypeContact extends AbstractStructEnumBase
{
    /**
     * Constant for value 'No'
     *
     * @return string 'No'
     */
    public const VALUE_NO = 'No';
    /**
     * Constant for value 'Predict'
     *
     * @return string 'Predict'
     */
    public const VALUE_PREDICT = 'Predict';
    /**
     * Constant for value 'AutomaticSMS'
     *
     * @return string 'AutomaticSMS'
     */
    public const VALUE_AUTOMATIC_SMS = 'AutomaticSMS';
    /**
     * Constant for value 'AutomaticMail'
     *
     * @return string 'AutomaticMail'
     */
    public const VALUE_AUTOMATIC_MAIL = 'AutomaticMail';

    /**
     * Return allowed values
     *
     * @uses self::VALUE_NO
     * @uses self::VALUE_PREDICT
     * @uses self::VALUE_AUTOMATIC_SMS
     * @uses self::VALUE_AUTOMATIC_MAIL
     *
     * @return array<string>
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NO,
            self::VALUE_PREDICT,
            self::VALUE_AUTOMATIC_SMS,
            self::VALUE_AUTOMATIC_MAIL,
        ];
    }
}
