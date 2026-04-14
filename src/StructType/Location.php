<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Location StructType
 */
#[\AllowDynamicProperties]
class Location extends AbstractStructBase
{
    /**
     * The TimeStamp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $TimeStamp;
    /**
     * The Latitude
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected float $Latitude;
    /**
     * The Longitude
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected float $Longitude;

    /**
     * Constructor method for Location
     *
     * @uses Location::setTimeStamp()
     * @uses Location::setLatitude()
     * @uses Location::setLongitude()
     */
    public function __construct(string $timeStamp, float $latitude, float $longitude)
    {
        $this
            ->setTimeStamp($timeStamp)
            ->setLatitude($latitude)
            ->setLongitude($longitude)
        ;
    }

    /**
     * Get TimeStamp value
     */
    public function getTimeStamp(): string
    {
        return $this->TimeStamp;
    }

    /**
     * Set TimeStamp value
     */
    public function setTimeStamp(string $timeStamp): self
    {
        // validation for constraint: string
        if (null !== $timeStamp && !\is_string($timeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeStamp, true), \gettype($timeStamp)), __LINE__);
        }
        $this->TimeStamp = $timeStamp;

        return $this;
    }

    /**
     * Get Latitude value
     */
    public function getLatitude(): float
    {
        return $this->Latitude;
    }

    /**
     * Set Latitude value
     */
    public function setLatitude(float $latitude): self
    {
        // validation for constraint: float
        if (null !== $latitude && !(\is_float($latitude) || is_numeric($latitude))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($latitude, true), \gettype($latitude)), __LINE__);
        }
        $this->Latitude = $latitude;

        return $this;
    }

    /**
     * Get Longitude value
     */
    public function getLongitude(): float
    {
        return $this->Longitude;
    }

    /**
     * Set Longitude value
     */
    public function setLongitude(float $longitude): self
    {
        // validation for constraint: float
        if (null !== $longitude && !(\is_float($longitude) || is_numeric($longitude))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($longitude, true), \gettype($longitude)), __LINE__);
        }
        $this->Longitude = $longitude;

        return $this;
    }
}
