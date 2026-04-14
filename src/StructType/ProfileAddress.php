<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileAddress StructType
 */
#[\AllowDynamicProperties]
class ProfileAddress extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $Type;
    /**
     * The Priority
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $Priority;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Title = null;
    /**
     * The Name0
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Name0 = null;
    /**
     * The Name1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Name1 = null;
    /**
     * The Name2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Name2 = null;
    /**
     * The Name3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Name3 = null;
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
     * The HouseNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $HouseNumber = null;
    /**
     * The HouseNumberExtension
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $HouseNumberExtension = null;
    /**
     * The Floor
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Floor = null;
    /**
     * The PostOfficeBox
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PostOfficeBox = null;
    /**
     * The PhoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PhoneNumber = null;
    /**
     * The FaxNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $FaxNumber = null;
    /**
     * The MobileNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $MobileNumber = null;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Email = null;
    /**
     * The GeoX
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $GeoX = null;
    /**
     * The GeoY
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $GeoY = null;

    /**
     * Constructor method for ProfileAddress
     *
     * @uses ProfileAddress::setType()
     * @uses ProfileAddress::setPriority()
     * @uses ProfileAddress::setTitle()
     * @uses ProfileAddress::setName0()
     * @uses ProfileAddress::setName1()
     * @uses ProfileAddress::setName2()
     * @uses ProfileAddress::setName3()
     * @uses ProfileAddress::setCountryPrefix()
     * @uses ProfileAddress::setZipCode()
     * @uses ProfileAddress::setCity()
     * @uses ProfileAddress::setStreet()
     * @uses ProfileAddress::setHouseNumber()
     * @uses ProfileAddress::setHouseNumberExtension()
     * @uses ProfileAddress::setFloor()
     * @uses ProfileAddress::setPostOfficeBox()
     * @uses ProfileAddress::setPhoneNumber()
     * @uses ProfileAddress::setFaxNumber()
     * @uses ProfileAddress::setMobileNumber()
     * @uses ProfileAddress::setEmail()
     * @uses ProfileAddress::setGeoX()
     * @uses ProfileAddress::setGeoY()
     */
    public function __construct(string $type, int $priority, ?string $title = null, ?string $name0 = null, ?string $name1 = null, ?string $name2 = null, ?string $name3 = null, ?string $countryPrefix = null, ?string $zipCode = null, ?string $city = null, ?string $street = null, ?string $houseNumber = null, ?string $houseNumberExtension = null, ?string $floor = null, ?string $postOfficeBox = null, ?string $phoneNumber = null, ?string $faxNumber = null, ?string $mobileNumber = null, ?string $email = null, ?string $geoX = null, ?string $geoY = null)
    {
        $this
            ->setType($type)
            ->setPriority($priority)
            ->setTitle($title)
            ->setName0($name0)
            ->setName1($name1)
            ->setName2($name2)
            ->setName3($name3)
            ->setCountryPrefix($countryPrefix)
            ->setZipCode($zipCode)
            ->setCity($city)
            ->setStreet($street)
            ->setHouseNumber($houseNumber)
            ->setHouseNumberExtension($houseNumberExtension)
            ->setFloor($floor)
            ->setPostOfficeBox($postOfficeBox)
            ->setPhoneNumber($phoneNumber)
            ->setFaxNumber($faxNumber)
            ->setMobileNumber($mobileNumber)
            ->setEmail($email)
            ->setGeoX($geoX)
            ->setGeoY($geoY)
        ;
    }

    /**
     * Get Type value
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Set Type value
     *
     * @uses \Scraper\ScraperDPD\EnumType\AddressType::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\AddressType::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\AddressType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\AddressType', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\AddressType::getValidValues())), __LINE__);
        }
        $this->Type = $type;

        return $this;
    }

    /**
     * Get Priority value
     */
    public function getPriority(): int
    {
        return $this->Priority;
    }

    /**
     * Set Priority value
     */
    public function setPriority(int $priority): self
    {
        // validation for constraint: int
        if (null !== $priority && !(\is_int($priority) || ctype_digit($priority))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), \gettype($priority)), __LINE__);
        }
        $this->Priority = $priority;

        return $this;
    }

    /**
     * Get Title value
     */
    public function getTitle(): ?string
    {
        return $this->Title;
    }

    /**
     * Set Title value
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (null !== $title && !\is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), \gettype($title)), __LINE__);
        }
        $this->Title = $title;

        return $this;
    }

    /**
     * Get Name0 value
     */
    public function getName0(): ?string
    {
        return $this->Name0;
    }

    /**
     * Set Name0 value
     */
    public function setName0(?string $name0 = null): self
    {
        // validation for constraint: string
        if (null !== $name0 && !\is_string($name0)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name0, true), \gettype($name0)), __LINE__);
        }
        $this->Name0 = $name0;

        return $this;
    }

    /**
     * Get Name1 value
     */
    public function getName1(): ?string
    {
        return $this->Name1;
    }

    /**
     * Set Name1 value
     */
    public function setName1(?string $name1 = null): self
    {
        // validation for constraint: string
        if (null !== $name1 && !\is_string($name1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name1, true), \gettype($name1)), __LINE__);
        }
        $this->Name1 = $name1;

        return $this;
    }

    /**
     * Get Name2 value
     */
    public function getName2(): ?string
    {
        return $this->Name2;
    }

    /**
     * Set Name2 value
     */
    public function setName2(?string $name2 = null): self
    {
        // validation for constraint: string
        if (null !== $name2 && !\is_string($name2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name2, true), \gettype($name2)), __LINE__);
        }
        $this->Name2 = $name2;

        return $this;
    }

    /**
     * Get Name3 value
     */
    public function getName3(): ?string
    {
        return $this->Name3;
    }

    /**
     * Set Name3 value
     */
    public function setName3(?string $name3 = null): self
    {
        // validation for constraint: string
        if (null !== $name3 && !\is_string($name3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name3, true), \gettype($name3)), __LINE__);
        }
        $this->Name3 = $name3;

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
     * Get HouseNumber value
     */
    public function getHouseNumber(): ?string
    {
        return $this->HouseNumber;
    }

    /**
     * Set HouseNumber value
     */
    public function setHouseNumber(?string $houseNumber = null): self
    {
        // validation for constraint: string
        if (null !== $houseNumber && !\is_string($houseNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($houseNumber, true), \gettype($houseNumber)), __LINE__);
        }
        $this->HouseNumber = $houseNumber;

        return $this;
    }

    /**
     * Get HouseNumberExtension value
     */
    public function getHouseNumberExtension(): ?string
    {
        return $this->HouseNumberExtension;
    }

    /**
     * Set HouseNumberExtension value
     */
    public function setHouseNumberExtension(?string $houseNumberExtension = null): self
    {
        // validation for constraint: string
        if (null !== $houseNumberExtension && !\is_string($houseNumberExtension)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($houseNumberExtension, true), \gettype($houseNumberExtension)), __LINE__);
        }
        $this->HouseNumberExtension = $houseNumberExtension;

        return $this;
    }

    /**
     * Get Floor value
     */
    public function getFloor(): ?string
    {
        return $this->Floor;
    }

    /**
     * Set Floor value
     */
    public function setFloor(?string $floor = null): self
    {
        // validation for constraint: string
        if (null !== $floor && !\is_string($floor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($floor, true), \gettype($floor)), __LINE__);
        }
        $this->Floor = $floor;

        return $this;
    }

    /**
     * Get PostOfficeBox value
     */
    public function getPostOfficeBox(): ?string
    {
        return $this->PostOfficeBox;
    }

    /**
     * Set PostOfficeBox value
     */
    public function setPostOfficeBox(?string $postOfficeBox = null): self
    {
        // validation for constraint: string
        if (null !== $postOfficeBox && !\is_string($postOfficeBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postOfficeBox, true), \gettype($postOfficeBox)), __LINE__);
        }
        $this->PostOfficeBox = $postOfficeBox;

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
     * Get FaxNumber value
     */
    public function getFaxNumber(): ?string
    {
        return $this->FaxNumber;
    }

    /**
     * Set FaxNumber value
     */
    public function setFaxNumber(?string $faxNumber = null): self
    {
        // validation for constraint: string
        if (null !== $faxNumber && !\is_string($faxNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($faxNumber, true), \gettype($faxNumber)), __LINE__);
        }
        $this->FaxNumber = $faxNumber;

        return $this;
    }

    /**
     * Get MobileNumber value
     */
    public function getMobileNumber(): ?string
    {
        return $this->MobileNumber;
    }

    /**
     * Set MobileNumber value
     */
    public function setMobileNumber(?string $mobileNumber = null): self
    {
        // validation for constraint: string
        if (null !== $mobileNumber && !\is_string($mobileNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobileNumber, true), \gettype($mobileNumber)), __LINE__);
        }
        $this->MobileNumber = $mobileNumber;

        return $this;
    }

    /**
     * Get Email value
     */
    public function getEmail(): ?string
    {
        return $this->Email;
    }

    /**
     * Set Email value
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (null !== $email && !\is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), \gettype($email)), __LINE__);
        }
        $this->Email = $email;

        return $this;
    }

    /**
     * Get GeoX value
     */
    public function getGeoX(): ?string
    {
        return $this->GeoX;
    }

    /**
     * Set GeoX value
     */
    public function setGeoX(?string $geoX = null): self
    {
        // validation for constraint: string
        if (null !== $geoX && !\is_string($geoX)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoX, true), \gettype($geoX)), __LINE__);
        }
        $this->GeoX = $geoX;

        return $this;
    }

    /**
     * Get GeoY value
     */
    public function getGeoY(): ?string
    {
        return $this->GeoY;
    }

    /**
     * Set GeoY value
     */
    public function setGeoY(?string $geoY = null): self
    {
        // validation for constraint: string
        if (null !== $geoY && !\is_string($geoY)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoY, true), \gettype($geoY)), __LINE__);
        }
        $this->GeoY = $geoY;

        return $this;
    }
}
