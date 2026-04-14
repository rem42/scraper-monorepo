<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCNOTParcel ArrayType
 */
class ArrayOfCNOTParcel extends AbstractStructArrayBase
{
    /**
     * The CNOTParcel
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\CNOTParcel>
     */
    protected ?array $CNOTParcel = null;

    /**
     * Constructor method for ArrayOfCNOTParcel
     *
     * @uses ArrayOfCNOTParcel::setCNOTParcel()
     *
     * @param array<\Scraper\ScraperDPD\StructType\CNOTParcel> $cNOTParcel
     */
    public function __construct(?array $cNOTParcel = null)
    {
        $this
            ->setCNOTParcel($cNOTParcel)
        ;
    }

    /**
     * Get CNOTParcel value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\CNOTParcel>
     */
    public function getCNOTParcel(): ?array
    {
        return $this->CNOTParcel ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCNOTParcel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCNOTParcel method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCNOTParcelForArrayConstraintFromSetCNOTParcel(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfCNOTParcelCNOTParcelItem) {
            // validation for constraint: itemType
            if (!$arrayOfCNOTParcelCNOTParcelItem instanceof \Scraper\ScraperDPD\StructType\CNOTParcel) {
                $invalidValues[] = \is_object($arrayOfCNOTParcelCNOTParcelItem) ? $arrayOfCNOTParcelCNOTParcelItem::class : sprintf('%s(%s)', \gettype($arrayOfCNOTParcelCNOTParcelItem), var_export($arrayOfCNOTParcelCNOTParcelItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The CNOTParcel property can only contain items of type \Scraper\ScraperDPD\StructType\CNOTParcel, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set CNOTParcel value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\CNOTParcel> $cNOTParcel
     *
     * @throws \InvalidArgumentException
     */
    public function setCNOTParcel(?array $cNOTParcel = null): self
    {
        // validation for constraint: array
        if ('' !== ($cNOTParcelArrayErrorMessage = self::validateCNOTParcelForArrayConstraintFromSetCNOTParcel($cNOTParcel))) {
            throw new \InvalidArgumentException($cNOTParcelArrayErrorMessage, __LINE__);
        }

        if (null === $cNOTParcel || (\is_array($cNOTParcel) && empty($cNOTParcel))) {
            unset($this->CNOTParcel);
        } else {
            $this->CNOTParcel = $cNOTParcel;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\CNOTParcel
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\CNOTParcel
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\CNOTParcel
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\CNOTParcel
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\CNOTParcel
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\CNOTParcel $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\CNOTParcel) {
            throw new \InvalidArgumentException(sprintf('The CNOTParcel property can only contain items of type \Scraper\ScraperDPD\StructType\CNOTParcel, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string CNOTParcel
     */
    public function getAttributeName(): string
    {
        return 'CNOTParcel';
    }
}
