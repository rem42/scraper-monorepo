<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPropertyDefinition ArrayType
 */
class ArrayOfPropertyDefinition extends AbstractStructArrayBase
{
    /**
     * The PropertyDefinition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\PropertyDefinition>
     */
    protected ?array $PropertyDefinition = null;

    /**
     * Constructor method for ArrayOfPropertyDefinition
     *
     * @uses ArrayOfPropertyDefinition::setPropertyDefinition()
     *
     * @param array<\Scraper\ScraperDPD\StructType\PropertyDefinition> $propertyDefinition
     */
    public function __construct(?array $propertyDefinition = null)
    {
        $this
            ->setPropertyDefinition($propertyDefinition)
        ;
    }

    /**
     * Get PropertyDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\PropertyDefinition>
     */
    public function getPropertyDefinition(): ?array
    {
        return $this->PropertyDefinition ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPropertyDefinition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPropertyDefinition method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePropertyDefinitionForArrayConstraintFromSetPropertyDefinition(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfPropertyDefinitionPropertyDefinitionItem) {
            // validation for constraint: itemType
            if (!$arrayOfPropertyDefinitionPropertyDefinitionItem instanceof \Scraper\ScraperDPD\StructType\PropertyDefinition) {
                $invalidValues[] = \is_object($arrayOfPropertyDefinitionPropertyDefinitionItem) ? $arrayOfPropertyDefinitionPropertyDefinitionItem::class : sprintf('%s(%s)', \gettype($arrayOfPropertyDefinitionPropertyDefinitionItem), var_export($arrayOfPropertyDefinitionPropertyDefinitionItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The PropertyDefinition property can only contain items of type \Scraper\ScraperDPD\StructType\PropertyDefinition, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set PropertyDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\PropertyDefinition> $propertyDefinition
     *
     * @throws \InvalidArgumentException
     */
    public function setPropertyDefinition(?array $propertyDefinition = null): self
    {
        // validation for constraint: array
        if ('' !== ($propertyDefinitionArrayErrorMessage = self::validatePropertyDefinitionForArrayConstraintFromSetPropertyDefinition($propertyDefinition))) {
            throw new \InvalidArgumentException($propertyDefinitionArrayErrorMessage, __LINE__);
        }

        if (null === $propertyDefinition || (\is_array($propertyDefinition) && empty($propertyDefinition))) {
            unset($this->PropertyDefinition);
        } else {
            $this->PropertyDefinition = $propertyDefinition;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\PropertyDefinition
    {
        return parent::current();
    }

    /**
     * Returns the indexed element
     *
     * @see AbstractStructArrayBase::item()
     *
     * @param int $index
     */
    public function item($index): ?\Scraper\ScraperDPD\StructType\PropertyDefinition
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\PropertyDefinition
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\PropertyDefinition
    {
        return parent::last();
    }

    /**
     * Returns the element at the offset
     *
     * @see AbstractStructArrayBase::offsetGet()
     *
     * @param int $offset
     */
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\PropertyDefinition
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\PropertyDefinition $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\PropertyDefinition) {
            throw new \InvalidArgumentException(sprintf('The PropertyDefinition property can only contain items of type \Scraper\ScraperDPD\StructType\PropertyDefinition, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string PropertyDefinition
     */
    public function getAttributeName(): string
    {
        return 'PropertyDefinition';
    }
}
