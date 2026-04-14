<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressObject StructType
 */
#[\AllowDynamicProperties]
class AddressObject extends AbstractStructBase
{
    /**
     * The Add2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Add2 = null;
    /**
     * The Add3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Add3 = null;
    /**
     * The Add4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Add4 = null;
    /**
     * The GPSCoord
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?LocalizationObject $GPSCoord = null;
    /**
     * The Company
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $Company;
    /**
     * The Add1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $Add1;
    /**
     * The ZC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $ZC;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $City;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $Country;

    /**
     * Constructor method for AddressObject
     *
     * @uses AddressObject::setAdd2()
     * @uses AddressObject::setAdd3()
     * @uses AddressObject::setAdd4()
     * @uses AddressObject::setGPSCoord()
     * @uses AddressObject::setCompany()
     * @uses AddressObject::setAdd1()
     * @uses AddressObject::setZC()
     * @uses AddressObject::setCity()
     * @uses AddressObject::setCountry()
     */
    public function __construct(
        ?string $add2,
        ?string $add3,
        ?string $add4,
        ?LocalizationObject $gPSCoord,
        ?string $company,
        ?string $add1,
        ?string $zC,
        ?string $city,
        ?string $country
    ) {
        $this
            ->setAdd2($add2)
            ->setAdd3($add3)
            ->setAdd4($add4)
            ->setGPSCoord($gPSCoord)
            ->setCompany($company)
            ->setAdd1($add1)
            ->setZC($zC)
            ->setCity($city)
            ->setCountry($country)
        ;
    }

    /**
     * Get Add2 value
     */
    public function getAdd2(): ?string
    {
        return $this->Add2;
    }

    /**
     * Set Add2 value
     */
    public function setAdd2(?string $add2 = null): self
    {
        // validation for constraint: string
        if (null !== $add2 && !\is_string($add2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($add2, true), \gettype($add2)), __LINE__);
        }
        $this->Add2 = $add2;

        return $this;
    }

    /**
     * Get Add3 value
     */
    public function getAdd3(): ?string
    {
        return $this->Add3;
    }

    /**
     * Set Add3 value
     */
    public function setAdd3(?string $add3 = null): self
    {
        // validation for constraint: string
        if (null !== $add3 && !\is_string($add3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($add3, true), \gettype($add3)), __LINE__);
        }
        $this->Add3 = $add3;

        return $this;
    }

    /**
     * Get Add4 value
     */
    public function getAdd4(): ?string
    {
        return $this->Add4;
    }

    /**
     * Set Add4 value
     */
    public function setAdd4(?string $add4 = null): self
    {
        // validation for constraint: string
        if (null !== $add4 && !\is_string($add4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($add4, true), \gettype($add4)), __LINE__);
        }
        $this->Add4 = $add4;

        return $this;
    }

    /**
     * Get GPSCoord value
     */
    public function getGPSCoord(): ?LocalizationObject
    {
        return $this->GPSCoord;
    }

    /**
     * Set GPSCoord value
     */
    public function setGPSCoord(?LocalizationObject $gPSCoord = null): self
    {
        $this->GPSCoord = $gPSCoord;

        return $this;
    }

    /**
     * Get Company value
     */
    public function getCompany(): string
    {
        return $this->Company;
    }

    /**
     * Set Company value
     */
    public function setCompany(?string $company): self
    {
        // validation for constraint: string
        if (null !== $company && !\is_string($company)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company, true), \gettype($company)), __LINE__);
        }
        $this->Company = $company;

        return $this;
    }

    /**
     * Get Add1 value
     */
    public function getAdd1(): string
    {
        return $this->Add1;
    }

    /**
     * Set Add1 value
     */
    public function setAdd1(?string $add1): self
    {
        // validation for constraint: string
        if (null !== $add1 && !\is_string($add1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($add1, true), \gettype($add1)), __LINE__);
        }
        $this->Add1 = $add1;

        return $this;
    }

    /**
     * Get ZC value
     */
    public function getZC(): string
    {
        return $this->ZC;
    }

    /**
     * Set ZC value
     */
    public function setZC(?string $zC): self
    {
        // validation for constraint: string
        if (null !== $zC && !\is_string($zC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zC, true), \gettype($zC)), __LINE__);
        }
        $this->ZC = $zC;

        return $this;
    }

    /**
     * Get City value
     */
    public function getCity(): string
    {
        return $this->City;
    }

    /**
     * Set City value
     */
    public function setCity(?string $city): self
    {
        // validation for constraint: string
        if (null !== $city && !\is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), \gettype($city)), __LINE__);
        }
        $this->City = $city;

        return $this;
    }

    /**
     * Get Country value
     */
    public function getCountry(): string
    {
        return $this->Country;
    }

    /**
     * Set Country value
     */
    public function setCountry(?string $country): self
    {
        // validation for constraint: string
        if (null !== $country && !\is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), \gettype($country)), __LINE__);
        }
        $this->Country = $country;

        return $this;
    }
}
