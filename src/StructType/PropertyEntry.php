<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyEntry StructType
 */
#[\AllowDynamicProperties]
class PropertyEntry extends AbstractStructBase
{
    /**
     * The PropertyId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $PropertyId;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Value = null;

    /**
     * Constructor method for PropertyEntry
     *
     * @uses PropertyEntry::setPropertyId()
     * @uses PropertyEntry::setValue()
     */
    public function __construct(int $propertyId, ?string $value = null)
    {
        $this
            ->setPropertyId($propertyId)
            ->setValue($value)
        ;
    }

    /**
     * Get PropertyId value
     */
    public function getPropertyId(): int
    {
        return $this->PropertyId;
    }

    /**
     * Set PropertyId value
     */
    public function setPropertyId(int $propertyId): self
    {
        // validation for constraint: int
        if (null !== $propertyId && !(\is_int($propertyId) || ctype_digit($propertyId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($propertyId, true), \gettype($propertyId)), __LINE__);
        }
        $this->PropertyId = $propertyId;

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
}
