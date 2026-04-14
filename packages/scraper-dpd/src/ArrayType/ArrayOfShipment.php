<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfShipment ArrayType
 */
class ArrayOfShipment extends AbstractStructArrayBase
{
    /**
     * The Shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\Shipment>
     */
    protected ?array $Shipment = null;

    /**
     * Constructor method for ArrayOfShipment
     *
     * @uses ArrayOfShipment::setShipment()
     *
     * @param array<\Scraper\ScraperDPD\StructType\Shipment> $shipment
     */
    public function __construct(?array $shipment = null)
    {
        $this
            ->setShipment($shipment)
        ;
    }

    /**
     * Get Shipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\Shipment>
     */
    public function getShipment(): ?array
    {
        return $this->Shipment ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setShipment method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipment method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipmentForArrayConstraintFromSetShipment(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfShipmentShipmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfShipmentShipmentItem instanceof \Scraper\ScraperDPD\StructType\Shipment) {
                $invalidValues[] = \is_object($arrayOfShipmentShipmentItem) ? $arrayOfShipmentShipmentItem::class : sprintf('%s(%s)', \gettype($arrayOfShipmentShipmentItem), var_export($arrayOfShipmentShipmentItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Shipment property can only contain items of type \Scraper\ScraperDPD\StructType\Shipment, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set Shipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\Shipment> $shipment
     *
     * @throws \InvalidArgumentException
     */
    public function setShipment(?array $shipment = null): self
    {
        // validation for constraint: array
        if ('' !== ($shipmentArrayErrorMessage = self::validateShipmentForArrayConstraintFromSetShipment($shipment))) {
            throw new \InvalidArgumentException($shipmentArrayErrorMessage, __LINE__);
        }

        if (null === $shipment || (\is_array($shipment) && empty($shipment))) {
            unset($this->Shipment);
        } else {
            $this->Shipment = $shipment;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\Shipment
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\Shipment
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\Shipment
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\Shipment
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\Shipment
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\Shipment $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\Shipment) {
            throw new \InvalidArgumentException(sprintf('The Shipment property can only contain items of type \Scraper\ScraperDPD\StructType\Shipment, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string Shipment
     */
    public function getAttributeName(): string
    {
        return 'Shipment';
    }
}
