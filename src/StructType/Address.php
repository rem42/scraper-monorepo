<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for Address StructType
 */
#[\AllowDynamicProperties]
class Address extends AddressMini
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $name = null;
    /**
     * The phoneNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $phoneNumber = null;
    /**
     * The faxNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $faxNumber = null;
    /**
     * The geoX
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $geoX = null;
    /**
     * The geoY
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $geoY = null;

    /**
     * Constructor method for Address
     *
     * @uses Address::setName()
     * @uses Address::setPhoneNumber()
     * @uses Address::setFaxNumber()
     * @uses Address::setGeoX()
     * @uses Address::setGeoY()
     */
    public function __construct(?string $name = null, ?string $phoneNumber = null, ?string $faxNumber = null, ?string $geoX = null, ?string $geoY = null)
    {
        $this
            ->setName($name)
            ->setPhoneNumber($phoneNumber)
            ->setFaxNumber($faxNumber)
            ->setGeoX($geoX)
            ->setGeoY($geoY)
        ;
    }

    /**
     * Get name value
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set name value
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (null !== $name && !\is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), \gettype($name)), __LINE__);
        }
        $this->name = $name;

        return $this;
    }

    /**
     * Get phoneNumber value
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    /**
     * Set phoneNumber value
     */
    public function setPhoneNumber(?string $phoneNumber = null): self
    {
        // validation for constraint: string
        if (null !== $phoneNumber && !\is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneNumber, true), \gettype($phoneNumber)), __LINE__);
        }
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get faxNumber value
     */
    public function getFaxNumber(): ?string
    {
        return $this->faxNumber;
    }

    /**
     * Set faxNumber value
     */
    public function setFaxNumber(?string $faxNumber = null): self
    {
        // validation for constraint: string
        if (null !== $faxNumber && !\is_string($faxNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($faxNumber, true), \gettype($faxNumber)), __LINE__);
        }
        $this->faxNumber = $faxNumber;

        return $this;
    }

    /**
     * Get geoX value
     */
    public function getGeoX(): ?string
    {
        return $this->geoX;
    }

    /**
     * Set geoX value
     */
    public function setGeoX(?string $geoX = null): self
    {
        // validation for constraint: string
        if (null !== $geoX && !\is_string($geoX)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoX, true), \gettype($geoX)), __LINE__);
        }
        $this->geoX = $geoX;

        return $this;
    }

    /**
     * Get geoY value
     */
    public function getGeoY(): ?string
    {
        return $this->geoY;
    }

    /**
     * Set geoY value
     */
    public function setGeoY(?string $geoY = null): self
    {
        // validation for constraint: string
        if (null !== $geoY && !\is_string($geoY)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($geoY, true), \gettype($geoY)), __LINE__);
        }
        $this->geoY = $geoY;

        return $this;
    }
}
