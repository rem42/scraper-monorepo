<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBarcodeData ArrayType
 */
class ArrayOfBarcodeData extends AbstractStructArrayBase
{
    /**
     * The BarcodeData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\BarcodeData>
     */
    protected ?array $BarcodeData = null;

    /**
     * Constructor method for ArrayOfBarcodeData
     *
     * @uses ArrayOfBarcodeData::setBarcodeData()
     *
     * @param array<\Scraper\ScraperDPD\StructType\BarcodeData> $barcodeData
     */
    public function __construct(?array $barcodeData = null)
    {
        $this
            ->setBarcodeData($barcodeData)
        ;
    }

    /**
     * Get BarcodeData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\BarcodeData>
     */
    public function getBarcodeData(): ?array
    {
        return $this->BarcodeData ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setBarcodeData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBarcodeData method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBarcodeDataForArrayConstraintFromSetBarcodeData(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfBarcodeDataBarcodeDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfBarcodeDataBarcodeDataItem instanceof \Scraper\ScraperDPD\StructType\BarcodeData) {
                $invalidValues[] = \is_object($arrayOfBarcodeDataBarcodeDataItem) ? $arrayOfBarcodeDataBarcodeDataItem::class : sprintf('%s(%s)', \gettype($arrayOfBarcodeDataBarcodeDataItem), var_export($arrayOfBarcodeDataBarcodeDataItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The BarcodeData property can only contain items of type \Scraper\ScraperDPD\StructType\BarcodeData, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set BarcodeData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\BarcodeData> $barcodeData
     *
     * @throws \InvalidArgumentException
     */
    public function setBarcodeData(?array $barcodeData = null): self
    {
        // validation for constraint: array
        if ('' !== ($barcodeDataArrayErrorMessage = self::validateBarcodeDataForArrayConstraintFromSetBarcodeData($barcodeData))) {
            throw new \InvalidArgumentException($barcodeDataArrayErrorMessage, __LINE__);
        }

        if (null === $barcodeData || (\is_array($barcodeData) && empty($barcodeData))) {
            unset($this->BarcodeData);
        } else {
            $this->BarcodeData = $barcodeData;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\BarcodeData
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\BarcodeData
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\BarcodeData
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\BarcodeData
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\BarcodeData
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\BarcodeData $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\BarcodeData) {
            throw new \InvalidArgumentException(sprintf('The BarcodeData property can only contain items of type \Scraper\ScraperDPD\StructType\BarcodeData, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string BarcodeData
     */
    public function getAttributeName(): string
    {
        return 'BarcodeData';
    }
}
