<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CityObject StructType
 */
#[\AllowDynamicProperties]
class CityObject extends AbstractStructBase
{
    /**
     * The ZC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ZC = null;
    /**
     * The CityName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CityName = null;

    /**
     * Constructor method for CityObject
     *
     * @uses CityObject::setZC()
     * @uses CityObject::setCityName()
     */
    public function __construct(?string $zC = null, ?string $cityName = null)
    {
        $this
            ->setZC($zC)
            ->setCityName($cityName)
        ;
    }

    /**
     * Get ZC value
     */
    public function getZC(): ?string
    {
        return $this->ZC;
    }

    /**
     * Set ZC value
     */
    public function setZC(?string $zC = null): self
    {
        // validation for constraint: string
        if (null !== $zC && !\is_string($zC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zC, true), \gettype($zC)), __LINE__);
        }
        $this->ZC = $zC;

        return $this;
    }

    /**
     * Get CityName value
     */
    public function getCityName(): ?string
    {
        return $this->CityName;
    }

    /**
     * Set CityName value
     */
    public function setCityName(?string $cityName = null): self
    {
        // validation for constraint: string
        if (null !== $cityName && !\is_string($cityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityName, true), \gettype($cityName)), __LINE__);
        }
        $this->CityName = $cityName;

        return $this;
    }
}
