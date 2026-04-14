<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPropertyEntry ArrayType
 */
class ArrayOfPropertyEntry extends AbstractStructArrayBase
{
    /**
     * The PropertyEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\PropertyEntry>
     */
    protected ?array $PropertyEntry = null;

    /**
     * Constructor method for ArrayOfPropertyEntry
     *
     * @uses ArrayOfPropertyEntry::setPropertyEntry()
     *
     * @param array<\Scraper\ScraperDPD\StructType\PropertyEntry> $propertyEntry
     */
    public function __construct(?array $propertyEntry = null)
    {
        $this
            ->setPropertyEntry($propertyEntry)
        ;
    }

    /**
     * Get PropertyEntry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\PropertyEntry>
     */
    public function getPropertyEntry(): ?array
    {
        return $this->PropertyEntry ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPropertyEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPropertyEntry method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePropertyEntryForArrayConstraintFromSetPropertyEntry(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfPropertyEntryPropertyEntryItem) {
            // validation for constraint: itemType
            if (!$arrayOfPropertyEntryPropertyEntryItem instanceof \Scraper\ScraperDPD\StructType\PropertyEntry) {
                $invalidValues[] = \is_object($arrayOfPropertyEntryPropertyEntryItem) ? $arrayOfPropertyEntryPropertyEntryItem::class : sprintf('%s(%s)', \gettype($arrayOfPropertyEntryPropertyEntryItem), var_export($arrayOfPropertyEntryPropertyEntryItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The PropertyEntry property can only contain items of type \Scraper\ScraperDPD\StructType\PropertyEntry, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set PropertyEntry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\PropertyEntry> $propertyEntry
     *
     * @throws \InvalidArgumentException
     */
    public function setPropertyEntry(?array $propertyEntry = null): self
    {
        // validation for constraint: array
        if ('' !== ($propertyEntryArrayErrorMessage = self::validatePropertyEntryForArrayConstraintFromSetPropertyEntry($propertyEntry))) {
            throw new \InvalidArgumentException($propertyEntryArrayErrorMessage, __LINE__);
        }

        if (null === $propertyEntry || (\is_array($propertyEntry) && empty($propertyEntry))) {
            unset($this->PropertyEntry);
        } else {
            $this->PropertyEntry = $propertyEntry;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\PropertyEntry
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\PropertyEntry
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\PropertyEntry
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\PropertyEntry
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\PropertyEntry
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\PropertyEntry $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\PropertyEntry) {
            throw new \InvalidArgumentException(sprintf('The PropertyEntry property can only contain items of type \Scraper\ScraperDPD\StructType\PropertyEntry, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string PropertyEntry
     */
    public function getAttributeName(): string
    {
        return 'PropertyEntry';
    }
}
