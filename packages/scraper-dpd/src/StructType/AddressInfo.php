<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressInfo StructType
 */
#[\AllowDynamicProperties]
class AddressInfo extends AbstractStructBase
{
    /**
     * The contact
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $contact = null;
    /**
     * The name2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $name2 = null;
    /**
     * The name3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $name3 = null;
    /**
     * The name4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $name4 = null;
    /**
     * The digicode1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $digicode1 = null;
    /**
     * The digicode2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $digicode2 = null;
    /**
     * The intercomid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $intercomid = null;
    /**
     * The vinfo1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $vinfo1 = null;
    /**
     * The vinfo2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $vinfo2 = null;

    /**
     * Constructor method for AddressInfo
     *
     * @uses AddressInfo::setContact()
     * @uses AddressInfo::setName2()
     * @uses AddressInfo::setName3()
     * @uses AddressInfo::setName4()
     * @uses AddressInfo::setDigicode1()
     * @uses AddressInfo::setDigicode2()
     * @uses AddressInfo::setIntercomid()
     * @uses AddressInfo::setVinfo1()
     * @uses AddressInfo::setVinfo2()
     */
    public function __construct(?string $contact = null, ?string $name2 = null, ?string $name3 = null, ?string $name4 = null, ?string $digicode1 = null, ?string $digicode2 = null, ?string $intercomid = null, ?string $vinfo1 = null, ?string $vinfo2 = null)
    {
        $this
            ->setContact($contact)
            ->setName2($name2)
            ->setName3($name3)
            ->setName4($name4)
            ->setDigicode1($digicode1)
            ->setDigicode2($digicode2)
            ->setIntercomid($intercomid)
            ->setVinfo1($vinfo1)
            ->setVinfo2($vinfo2)
        ;
    }

    /**
     * Get contact value
     */
    public function getContact(): ?string
    {
        return $this->contact;
    }

    /**
     * Set contact value
     */
    public function setContact(?string $contact = null): self
    {
        // validation for constraint: string
        if (null !== $contact && !\is_string($contact)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contact, true), \gettype($contact)), __LINE__);
        }
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get name2 value
     */
    public function getName2(): ?string
    {
        return $this->name2;
    }

    /**
     * Set name2 value
     */
    public function setName2(?string $name2 = null): self
    {
        // validation for constraint: string
        if (null !== $name2 && !\is_string($name2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name2, true), \gettype($name2)), __LINE__);
        }
        $this->name2 = $name2;

        return $this;
    }

    /**
     * Get name3 value
     */
    public function getName3(): ?string
    {
        return $this->name3;
    }

    /**
     * Set name3 value
     */
    public function setName3(?string $name3 = null): self
    {
        // validation for constraint: string
        if (null !== $name3 && !\is_string($name3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name3, true), \gettype($name3)), __LINE__);
        }
        $this->name3 = $name3;

        return $this;
    }

    /**
     * Get name4 value
     */
    public function getName4(): ?string
    {
        return $this->name4;
    }

    /**
     * Set name4 value
     */
    public function setName4(?string $name4 = null): self
    {
        // validation for constraint: string
        if (null !== $name4 && !\is_string($name4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name4, true), \gettype($name4)), __LINE__);
        }
        $this->name4 = $name4;

        return $this;
    }

    /**
     * Get digicode1 value
     */
    public function getDigicode1(): ?string
    {
        return $this->digicode1;
    }

    /**
     * Set digicode1 value
     */
    public function setDigicode1(?string $digicode1 = null): self
    {
        // validation for constraint: string
        if (null !== $digicode1 && !\is_string($digicode1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($digicode1, true), \gettype($digicode1)), __LINE__);
        }
        $this->digicode1 = $digicode1;

        return $this;
    }

    /**
     * Get digicode2 value
     */
    public function getDigicode2(): ?string
    {
        return $this->digicode2;
    }

    /**
     * Set digicode2 value
     */
    public function setDigicode2(?string $digicode2 = null): self
    {
        // validation for constraint: string
        if (null !== $digicode2 && !\is_string($digicode2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($digicode2, true), \gettype($digicode2)), __LINE__);
        }
        $this->digicode2 = $digicode2;

        return $this;
    }

    /**
     * Get intercomid value
     */
    public function getIntercomid(): ?string
    {
        return $this->intercomid;
    }

    /**
     * Set intercomid value
     */
    public function setIntercomid(?string $intercomid = null): self
    {
        // validation for constraint: string
        if (null !== $intercomid && !\is_string($intercomid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intercomid, true), \gettype($intercomid)), __LINE__);
        }
        $this->intercomid = $intercomid;

        return $this;
    }

    /**
     * Get vinfo1 value
     */
    public function getVinfo1(): ?string
    {
        return $this->vinfo1;
    }

    /**
     * Set vinfo1 value
     */
    public function setVinfo1(?string $vinfo1 = null): self
    {
        // validation for constraint: string
        if (null !== $vinfo1 && !\is_string($vinfo1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vinfo1, true), \gettype($vinfo1)), __LINE__);
        }
        $this->vinfo1 = $vinfo1;

        return $this;
    }

    /**
     * Get vinfo2 value
     */
    public function getVinfo2(): ?string
    {
        return $this->vinfo2;
    }

    /**
     * Set vinfo2 value
     */
    public function setVinfo2(?string $vinfo2 = null): self
    {
        // validation for constraint: string
        if (null !== $vinfo2 && !\is_string($vinfo2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vinfo2, true), \gettype($vinfo2)), __LINE__);
        }
        $this->vinfo2 = $vinfo2;

        return $this;
    }
}
