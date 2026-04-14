<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressMini StructType
 */
#[\AllowDynamicProperties]
class AddressMini extends AbstractStructBase
{
    /**
     * The countryPrefix
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $countryPrefix = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $zipCode = null;
    /**
     * The city
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $city = null;
    /**
     * The street
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $street = null;

    /**
     * Constructor method for AddressMini
     *
     * @uses AddressMini::setCountryPrefix()
     * @uses AddressMini::setZipCode()
     * @uses AddressMini::setCity()
     * @uses AddressMini::setStreet()
     */
    public function __construct(?string $countryPrefix = null, ?string $zipCode = null, ?string $city = null, ?string $street = null)
    {
        $this
            ->setCountryPrefix($countryPrefix)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setStreet($street)
        ;
    }

    /**
     * Get countryPrefix value
     */
    public function getCountryPrefix(): ?string
    {
        return $this->countryPrefix;
    }

    /**
     * Set countryPrefix value
     */
    public function setCountryPrefix(?string $countryPrefix = null): self
    {
        // validation for constraint: string
        if (null !== $countryPrefix && !\is_string($countryPrefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryPrefix, true), \gettype($countryPrefix)), __LINE__);
        }
        $this->countryPrefix = $countryPrefix;

        return $this;
    }

    /**
     * Get zipCode value
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * Set zipCode value
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (null !== $zipCode && !\is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), \gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get city value
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Set city value
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (null !== $city && !\is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), \gettype($city)), __LINE__);
        }
        $this->city = $city;

        return $this;
    }

    /**
     * Get street value
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * Set street value
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (null !== $street && !\is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), \gettype($street)), __LINE__);
        }
        $this->street = $street;

        return $this;
    }
}
