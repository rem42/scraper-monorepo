<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfShipmentBc ArrayType
 */
class ArrayOfShipmentBc extends AbstractStructArrayBase
{
    /**
     * The ShipmentBc
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\ShipmentBc>
     */
    protected ?array $ShipmentBc = null;

    /**
     * Constructor method for ArrayOfShipmentBc
     *
     * @uses ArrayOfShipmentBc::setShipmentBc()
     *
     * @param array<\Scraper\ScraperDPD\StructType\ShipmentBc> $shipmentBc
     */
    public function __construct(?array $shipmentBc = null)
    {
        $this
            ->setShipmentBc($shipmentBc)
        ;
    }

    /**
     * Get ShipmentBc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\ShipmentBc>
     */
    public function getShipmentBc(): ?array
    {
        return $this->ShipmentBc ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setShipmentBc method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipmentBc method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShipmentBcForArrayConstraintFromSetShipmentBc(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfShipmentBcShipmentBcItem) {
            // validation for constraint: itemType
            if (!$arrayOfShipmentBcShipmentBcItem instanceof \Scraper\ScraperDPD\StructType\ShipmentBc) {
                $invalidValues[] = \is_object($arrayOfShipmentBcShipmentBcItem) ? $arrayOfShipmentBcShipmentBcItem::class : sprintf('%s(%s)', \gettype($arrayOfShipmentBcShipmentBcItem), var_export($arrayOfShipmentBcShipmentBcItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The ShipmentBc property can only contain items of type \Scraper\ScraperDPD\StructType\ShipmentBc, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set ShipmentBc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\ShipmentBc> $shipmentBc
     *
     * @throws \InvalidArgumentException
     */
    public function setShipmentBc(?array $shipmentBc = null): self
    {
        // validation for constraint: array
        if ('' !== ($shipmentBcArrayErrorMessage = self::validateShipmentBcForArrayConstraintFromSetShipmentBc($shipmentBc))) {
            throw new \InvalidArgumentException($shipmentBcArrayErrorMessage, __LINE__);
        }

        if (null === $shipmentBc || (\is_array($shipmentBc) && empty($shipmentBc))) {
            unset($this->ShipmentBc);
        } else {
            $this->ShipmentBc = $shipmentBc;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\ShipmentBc
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\ShipmentBc
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\ShipmentBc
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\ShipmentBc
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\ShipmentBc
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\ShipmentBc $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\ShipmentBc) {
            throw new \InvalidArgumentException(sprintf('The ShipmentBc property can only contain items of type \Scraper\ScraperDPD\StructType\ShipmentBc, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string ShipmentBc
     */
    public function getAttributeName(): string
    {
        return 'ShipmentBc';
    }
}
