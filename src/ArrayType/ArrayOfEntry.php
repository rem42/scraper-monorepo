<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEntry ArrayType
 */
class ArrayOfEntry extends AbstractStructArrayBase
{
    /**
     * The Entry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\Entry>
     */
    protected ?array $Entry = null;

    /**
     * Constructor method for ArrayOfEntry
     *
     * @uses ArrayOfEntry::setEntry()
     *
     * @param array<\Scraper\ScraperDPD\StructType\Entry> $entry
     */
    public function __construct(?array $entry = null)
    {
        $this
            ->setEntry($entry)
        ;
    }

    /**
     * Get Entry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\Entry>
     */
    public function getEntry(): ?array
    {
        return $this->Entry ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEntry method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEntryForArrayConstraintFromSetEntry(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfEntryEntryItem) {
            // validation for constraint: itemType
            if (!$arrayOfEntryEntryItem instanceof \Scraper\ScraperDPD\StructType\Entry) {
                $invalidValues[] = \is_object($arrayOfEntryEntryItem) ? $arrayOfEntryEntryItem::class : sprintf('%s(%s)', \gettype($arrayOfEntryEntryItem), var_export($arrayOfEntryEntryItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Entry property can only contain items of type \Scraper\ScraperDPD\StructType\Entry, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set Entry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\Entry> $entry
     *
     * @throws \InvalidArgumentException
     */
    public function setEntry(?array $entry = null): self
    {
        // validation for constraint: array
        if ('' !== ($entryArrayErrorMessage = self::validateEntryForArrayConstraintFromSetEntry($entry))) {
            throw new \InvalidArgumentException($entryArrayErrorMessage, __LINE__);
        }

        if (null === $entry || (\is_array($entry) && empty($entry))) {
            unset($this->Entry);
        } else {
            $this->Entry = $entry;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\Entry
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\Entry
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\Entry
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\Entry
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\Entry
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\Entry $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\Entry) {
            throw new \InvalidArgumentException(sprintf('The Entry property can only contain items of type \Scraper\ScraperDPD\StructType\Entry, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string Entry
     */
    public function getAttributeName(): string
    {
        return 'Entry';
    }
}
