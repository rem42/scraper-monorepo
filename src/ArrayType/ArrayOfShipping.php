<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfShipping ArrayType
 */
class ArrayOfShipping extends AbstractStructArrayBase
{
    /**
     * The Shipping
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\Shipping>
     */
    protected ?array $Shipping = null;

    /**
     * Constructor method for ArrayOfShipping
     *
     * @uses ArrayOfShipping::setShipping()
     *
     * @param array<\Scraper\ScraperDPD\StructType\Shipping> $shipping
     */
    public function __construct(?array $shipping = null)
    {
        $this
            ->setShipping($shipping)
        ;
    }

    /**
     * Get Shipping value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\Shipping>
     */
    public function getShipping(): ?array
    {
        return $this->Shipping ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setShipping method
     * This method is willingly generated in order to preserve the one-line inline validation within the setShipping method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateShippingForArrayConstraintFromSetShipping(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfShippingShippingItem) {
            // validation for constraint: itemType
            if (!$arrayOfShippingShippingItem instanceof \Scraper\ScraperDPD\StructType\Shipping) {
                $invalidValues[] = \is_object($arrayOfShippingShippingItem) ? $arrayOfShippingShippingItem::class : sprintf('%s(%s)', \gettype($arrayOfShippingShippingItem), var_export($arrayOfShippingShippingItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Shipping property can only contain items of type \Scraper\ScraperDPD\StructType\Shipping, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set Shipping value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\Shipping> $shipping
     *
     * @throws \InvalidArgumentException
     */
    public function setShipping(?array $shipping = null): self
    {
        // validation for constraint: array
        if ('' !== ($shippingArrayErrorMessage = self::validateShippingForArrayConstraintFromSetShipping($shipping))) {
            throw new \InvalidArgumentException($shippingArrayErrorMessage, __LINE__);
        }

        if (null === $shipping || (\is_array($shipping) && empty($shipping))) {
            unset($this->Shipping);
        } else {
            $this->Shipping = $shipping;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\Shipping
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\Shipping
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\Shipping
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\Shipping
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\Shipping
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\Shipping $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\Shipping) {
            throw new \InvalidArgumentException(sprintf('The Shipping property can only contain items of type \Scraper\ScraperDPD\StructType\Shipping, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string Shipping
     */
    public function getAttributeName(): string
    {
        return 'Shipping';
    }
}
