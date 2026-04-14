<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceNoticeEntry ArrayType
 */
class ArrayOfServiceNoticeEntry extends AbstractStructArrayBase
{
    /**
     * The ServiceNoticeEntry
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\ServiceNoticeEntry>
     */
    protected ?array $ServiceNoticeEntry = null;

    /**
     * Constructor method for ArrayOfServiceNoticeEntry
     *
     * @uses ArrayOfServiceNoticeEntry::setServiceNoticeEntry()
     *
     * @param array<\Scraper\ScraperDPD\StructType\ServiceNoticeEntry> $serviceNoticeEntry
     */
    public function __construct(?array $serviceNoticeEntry = null)
    {
        $this
            ->setServiceNoticeEntry($serviceNoticeEntry)
        ;
    }

    /**
     * Get ServiceNoticeEntry value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\ServiceNoticeEntry>
     */
    public function getServiceNoticeEntry(): ?array
    {
        return $this->ServiceNoticeEntry ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setServiceNoticeEntry method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceNoticeEntry method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceNoticeEntryForArrayConstraintFromSetServiceNoticeEntry(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfServiceNoticeEntryServiceNoticeEntryItem) {
            // validation for constraint: itemType
            if (!$arrayOfServiceNoticeEntryServiceNoticeEntryItem instanceof \Scraper\ScraperDPD\StructType\ServiceNoticeEntry) {
                $invalidValues[] = \is_object($arrayOfServiceNoticeEntryServiceNoticeEntryItem) ? $arrayOfServiceNoticeEntryServiceNoticeEntryItem::class : sprintf('%s(%s)', \gettype($arrayOfServiceNoticeEntryServiceNoticeEntryItem), var_export($arrayOfServiceNoticeEntryServiceNoticeEntryItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceNoticeEntry property can only contain items of type \Scraper\ScraperDPD\StructType\ServiceNoticeEntry, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set ServiceNoticeEntry value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\ServiceNoticeEntry> $serviceNoticeEntry
     *
     * @throws \InvalidArgumentException
     */
    public function setServiceNoticeEntry(?array $serviceNoticeEntry = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceNoticeEntryArrayErrorMessage = self::validateServiceNoticeEntryForArrayConstraintFromSetServiceNoticeEntry($serviceNoticeEntry))) {
            throw new \InvalidArgumentException($serviceNoticeEntryArrayErrorMessage, __LINE__);
        }

        if (null === $serviceNoticeEntry || (\is_array($serviceNoticeEntry) && empty($serviceNoticeEntry))) {
            unset($this->ServiceNoticeEntry);
        } else {
            $this->ServiceNoticeEntry = $serviceNoticeEntry;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\ServiceNoticeEntry
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\ServiceNoticeEntry
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\ServiceNoticeEntry
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\ServiceNoticeEntry
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\ServiceNoticeEntry
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\ServiceNoticeEntry $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\ServiceNoticeEntry) {
            throw new \InvalidArgumentException(sprintf('The ServiceNoticeEntry property can only contain items of type \Scraper\ScraperDPD\StructType\ServiceNoticeEntry, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string ServiceNoticeEntry
     */
    public function getAttributeName(): string
    {
        return 'ServiceNoticeEntry';
    }
}
