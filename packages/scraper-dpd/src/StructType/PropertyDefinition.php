<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyDefinition StructType
 */
#[\AllowDynamicProperties]
class PropertyDefinition extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $Id;
    /**
     * The PropertyType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PropertyType = null;
    /**
     * The DataType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DataType = null;
    /**
     * The Property
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Property = null;
    /**
     * The Query
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Query = null;
    /**
     * The Options
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Options = null;

    /**
     * Constructor method for PropertyDefinition
     *
     * @uses PropertyDefinition::setId()
     * @uses PropertyDefinition::setPropertyType()
     * @uses PropertyDefinition::setDataType()
     * @uses PropertyDefinition::setProperty()
     * @uses PropertyDefinition::setQuery()
     * @uses PropertyDefinition::setOptions()
     */
    public function __construct(int $id, ?string $propertyType = null, ?string $dataType = null, ?string $property = null, ?string $query = null, ?string $options = null)
    {
        $this
            ->setId($id)
            ->setPropertyType($propertyType)
            ->setDataType($dataType)
            ->setProperty($property)
            ->setQuery($query)
            ->setOptions($options)
        ;
    }

    /**
     * Get Id value
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Set Id value
     */
    public function setId(int $id): self
    {
        // validation for constraint: int
        if (null !== $id && !(\is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), \gettype($id)), __LINE__);
        }
        $this->Id = $id;

        return $this;
    }

    /**
     * Get PropertyType value
     */
    public function getPropertyType(): ?string
    {
        return $this->PropertyType;
    }

    /**
     * Set PropertyType value
     */
    public function setPropertyType(?string $propertyType = null): self
    {
        // validation for constraint: string
        if (null !== $propertyType && !\is_string($propertyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($propertyType, true), \gettype($propertyType)), __LINE__);
        }
        $this->PropertyType = $propertyType;

        return $this;
    }

    /**
     * Get DataType value
     */
    public function getDataType(): ?string
    {
        return $this->DataType;
    }

    /**
     * Set DataType value
     */
    public function setDataType(?string $dataType = null): self
    {
        // validation for constraint: string
        if (null !== $dataType && !\is_string($dataType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataType, true), \gettype($dataType)), __LINE__);
        }
        $this->DataType = $dataType;

        return $this;
    }

    /**
     * Get Property value
     */
    public function getProperty(): ?string
    {
        return $this->Property;
    }

    /**
     * Set Property value
     */
    public function setProperty(?string $property = null): self
    {
        // validation for constraint: string
        if (null !== $property && !\is_string($property)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($property, true), \gettype($property)), __LINE__);
        }
        $this->Property = $property;

        return $this;
    }

    /**
     * Get Query value
     */
    public function getQuery(): ?string
    {
        return $this->Query;
    }

    /**
     * Set Query value
     */
    public function setQuery(?string $query = null): self
    {
        // validation for constraint: string
        if (null !== $query && !\is_string($query)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($query, true), \gettype($query)), __LINE__);
        }
        $this->Query = $query;

        return $this;
    }

    /**
     * Get Options value
     */
    public function getOptions(): ?string
    {
        return $this->Options;
    }

    /**
     * Set Options value
     */
    public function setOptions(?string $options = null): self
    {
        // validation for constraint: string
        if (null !== $options && !\is_string($options)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($options, true), \gettype($options)), __LINE__);
        }
        $this->Options = $options;

        return $this;
    }
}
