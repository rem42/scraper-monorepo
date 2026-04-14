<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGetShipmentEntry ArrayType
 */
class ArrayOfGetShipmentEntry extends AbstractStructArrayBase
{
    /**
     * The GetShipmentEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\GetShipmentEntry>
     */
    protected ?array $GetShipmentEntry = null;

    /**
     * Constructor method for ArrayOfGetShipmentEntry
     *
     * @uses ArrayOfGetShipmentEntry::setGetShipmentEntry()
     *
     * @param array<\Scraper\ScraperDPD\StructType\GetShipmentEntry> $getShipmentEntry
     */
    public function __construct(?array $getShipmentEntry = null)
    {
        $this
            ->setGetShipmentEntry($getShipmentEntry)
        ;
    }

    /**
     * Get GetShipmentEntry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\GetShipmentEntry>
     */
    public function getGetShipmentEntry(): ?array
    {
        return $this->GetShipmentEntry ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setGetShipmentEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetShipmentEntry method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetShipmentEntryForArrayConstraintFromSetGetShipmentEntry(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfGetShipmentEntryGetShipmentEntryItem) {
            // validation for constraint: itemType
            if (!$arrayOfGetShipmentEntryGetShipmentEntryItem instanceof \Scraper\ScraperDPD\StructType\GetShipmentEntry) {
                $invalidValues[] = \is_object($arrayOfGetShipmentEntryGetShipmentEntryItem) ? $arrayOfGetShipmentEntryGetShipmentEntryItem::class : sprintf('%s(%s)', \gettype($arrayOfGetShipmentEntryGetShipmentEntryItem), var_export($arrayOfGetShipmentEntryGetShipmentEntryItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The GetShipmentEntry property can only contain items of type \Scraper\ScraperDPD\StructType\GetShipmentEntry, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set GetShipmentEntry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\GetShipmentEntry> $getShipmentEntry
     *
     * @throws \InvalidArgumentException
     */
    public function setGetShipmentEntry(?array $getShipmentEntry = null): self
    {
        // validation for constraint: array
        if ('' !== ($getShipmentEntryArrayErrorMessage = self::validateGetShipmentEntryForArrayConstraintFromSetGetShipmentEntry($getShipmentEntry))) {
            throw new \InvalidArgumentException($getShipmentEntryArrayErrorMessage, __LINE__);
        }

        if (null === $getShipmentEntry || (\is_array($getShipmentEntry) && empty($getShipmentEntry))) {
            unset($this->GetShipmentEntry);
        } else {
            $this->GetShipmentEntry = $getShipmentEntry;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\GetShipmentEntry
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\GetShipmentEntry
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\GetShipmentEntry
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\GetShipmentEntry
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\GetShipmentEntry
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\GetShipmentEntry $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\GetShipmentEntry) {
            throw new \InvalidArgumentException(sprintf('The GetShipmentEntry property can only contain items of type \Scraper\ScraperDPD\StructType\GetShipmentEntry, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string GetShipmentEntry
     */
    public function getAttributeName(): string
    {
        return 'GetShipmentEntry';
    }
}
