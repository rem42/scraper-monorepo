<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceEntry StructType
 */
#[\AllowDynamicProperties]
class ServiceEntry extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Name = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Type = null;
    /**
     * The Attribute
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Attribute = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Value = null;
    /**
     * The Detail
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Detail = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Status = null;

    /**
     * Constructor method for ServiceEntry
     *
     * @uses ServiceEntry::setName()
     * @uses ServiceEntry::setType()
     * @uses ServiceEntry::setAttribute()
     * @uses ServiceEntry::setValue()
     * @uses ServiceEntry::setDetail()
     * @uses ServiceEntry::setStatus()
     */
    public function __construct(?string $name = null, ?string $type = null, ?string $attribute = null, ?string $value = null, ?string $detail = null, ?string $status = null)
    {
        $this
            ->setName($name)
            ->setType($type)
            ->setAttribute($attribute)
            ->setValue($value)
            ->setDetail($detail)
            ->setStatus($status)
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
     * Get Type value
     */
    public function getType(): ?string
    {
        return $this->Type;
    }

    /**
     * Set Type value
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (null !== $type && !\is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), \gettype($type)), __LINE__);
        }
        $this->Type = $type;

        return $this;
    }

    /**
     * Get Attribute value
     */
    public function getAttribute(): ?string
    {
        return $this->Attribute;
    }

    /**
     * Set Attribute value
     */
    public function setAttribute(?string $attribute = null): self
    {
        // validation for constraint: string
        if (null !== $attribute && !\is_string($attribute)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attribute, true), \gettype($attribute)), __LINE__);
        }
        $this->Attribute = $attribute;

        return $this;
    }

    /**
     * Get Value value
     */
    public function getValue(): ?string
    {
        return $this->Value;
    }

    /**
     * Set Value value
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (null !== $value && !\is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), \gettype($value)), __LINE__);
        }
        $this->Value = $value;

        return $this;
    }

    /**
     * Get Detail value
     */
    public function getDetail(): ?string
    {
        return $this->Detail;
    }

    /**
     * Set Detail value
     */
    public function setDetail(?string $detail = null): self
    {
        // validation for constraint: string
        if (null !== $detail && !\is_string($detail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detail, true), \gettype($detail)), __LINE__);
        }
        $this->Detail = $detail;

        return $this;
    }

    /**
     * Get Status value
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }

    /**
     * Set Status value
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (null !== $status && !\is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), \gettype($status)), __LINE__);
        }
        $this->Status = $status;

        return $this;
    }
}
