<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocalizationObject StructType
 */
#[\AllowDynamicProperties]
class LocalizationObject extends AbstractStructBase
{
    /**
     * The Lat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected float $Lat;
    /**
     * The Long
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected float $Long;

    /**
     * Constructor method for LocalizationObject
     *
     * @uses LocalizationObject::setLat()
     * @uses LocalizationObject::setLong()
     */
    public function __construct(float $lat, float $long)
    {
        $this
            ->setLat($lat)
            ->setLong($long)
        ;
    }

    /**
     * Get Lat value
     */
    public function getLat(): float
    {
        return $this->Lat;
    }

    /**
     * Set Lat value
     */
    public function setLat(float $lat): self
    {
        // validation for constraint: float
        if (null !== $lat && !(\is_float($lat) || is_numeric($lat))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($lat, true), \gettype($lat)), __LINE__);
        }
        $this->Lat = $lat;

        return $this;
    }

    /**
     * Get Long value
     */
    public function getLong(): float
    {
        return $this->Long;
    }

    /**
     * Set Long value
     */
    public function setLong(float $long): self
    {
        // validation for constraint: float
        if (null !== $long && !(\is_float($long) || is_numeric($long))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($long, true), \gettype($long)), __LINE__);
        }
        $this->Long = $long;

        return $this;
    }
}
