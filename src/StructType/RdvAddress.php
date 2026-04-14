<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RdvAddress StructType
 */
#[\AllowDynamicProperties]
class RdvAddress extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Name = null;
    /**
     * The CountryPrefix
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CountryPrefix = null;
    /**
     * The ZipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ZipCode = null;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $City = null;
    /**
     * The Street
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Street = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PhoneNumber = null;
    /**
     * The GeoCoord_Y
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $GeoCoord_Y = null;
    /**
     * The GeoCoord_X
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $GeoCoord_X = null;

    /**
     * Constructor method for RdvAddress
     *
     * @uses RdvAddress::setName()
     * @uses RdvAddress::setCountryPrefix()
     * @uses RdvAddress::setZipCode()
     * @uses RdvAddress::setCity()
     * @uses RdvAddress::setStreet()
     * @uses RdvAddress::setPhoneNumber()
     * @uses RdvAddress::setGeoCoord_Y()
     * @uses RdvAddress::setGeoCoord_X()
     */
    public function __construct(?string $name = null, ?string $countryPrefix = null, ?string $zipCode = null, ?string $city = null, ?string $street = null, ?string $phoneNumber = null, ?string $geoCoord_Y = null, ?string $geoCoord_X = null)
    {
        $this
            ->setName($name)
            ->setCountryPrefix($countryPrefix)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setStreet($street)
            ->setPhoneNumber($phoneNumber)
            ->setGeoCoord_Y($geoCoord_Y)
            ->setGeoCoord_X($geoCoord_X)
        ;
    }

    /**
     * Get Name value
     */
    public function getName(): ?string
    {
        return $this->Name;
    }

    /**
     * Set Name value
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (null !== $name && !\is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), \gettype($name)), __LINE__);
        }
        $this->Name = $name;

        return $this;
    }

    /**
     * Get CountryPrefix value
     */
    public function getCountryPrefix(): ?string
    {
        return $this->CountryPrefix;
    }

    /**
     * Set CountryPrefix value
     */
    public function setCountryPrefix(?string $countryPrefix = null): self
    {
        // validation for constraint: string
        if (null !== $countryPrefix && !\is_string($countryPrefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryPrefix, true), \gettype($countryPrefix)), __LINE__);
        }
        $this->CountryPrefix = $countryPrefix;

        return $this;
    }

    /**
     * Get ZipCode value
     */
    public function getZipCode(): ?string
    {
        return $this->ZipCode;
    }

    /**
     * Set ZipCode value
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (null !== $zipCode && !\is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), \gettype($zipCode)), __LINE__);
        }
        $this->ZipCode = $zipCode;

        return $this;
    }

    /**
     * Get City value
     */
    public function getCity(): ?string
    {
        return $this->City;
    }

    /**
     * Set City value
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (null !== $city && !\is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), \gettype($city)), __LINE__);
        }
        $this->City = $city;

        return $this;
    }

    /**
     * Get Street value
     */
    public function getStreet(): ?string
    {
        return $this->Street;
    }

    /**
     * Set Street value
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (null !== $street && !\is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), \gettype($street)), __LINE__);
        }
        $this->Street = $street;

        return $this;
    }

    /**
     * Get PhoneNumber value
     */
    public function getPhoneNumber(): ?string
    {
        return $this->PhoneNumber;
    }

    /**
     * Set PhoneNumber value
     */
    public function setPhoneNumber(?string $phoneNumber = null): self
    {
        // validation for constraint: string
        if (null !== $phoneNumber && !\is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), \gettype($phoneNumber)), __LINE__);
        }
        $this->PhoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get GeoCoord_Y value
     */
    public function getGeoCoord_Y(): ?string
    {
        return $this->GeoCoord_Y;
    }

    /**
     * Set GeoCoord_Y value
     */
    public function setGeoCoord_Y(?string $geoCoord_Y = null): self
    {
        // validation for constraint: string
        if (null !== $geoCoord_Y && !\is_string($geoCoord_Y)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoCoord_Y, true), \gettype($geoCoord_Y)), __LINE__);
        }
        $this->GeoCoord_Y = $geoCoord_Y;

        return $this;
    }

    /**
     * Get GeoCoord_X value
     */
    public function getGeoCoord_X(): ?string
    {
        return $this->GeoCoord_X;
    }

    /**
     * Set GeoCoord_X value
     */
    public function setGeoCoord_X(?string $geoCoord_X = null): self
    {
        // validation for constraint: string
        if (null !== $geoCoord_X && !\is_string($geoCoord_X)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoCoord_X, true), \gettype($geoCoord_X)), __LINE__);
        }
        $this->GeoCoord_X = $geoCoord_X;

        return $this;
    }
}
