<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfProfileAddress ArrayType
 */
class ArrayOfProfileAddress extends AbstractStructArrayBase
{
    /**
     * The ProfileAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\ProfileAddress>
     */
    protected ?array $ProfileAddress = null;

    /**
     * Constructor method for ArrayOfProfileAddress
     *
     * @uses ArrayOfProfileAddress::setProfileAddress()
     *
     * @param array<\Scraper\ScraperDPD\StructType\ProfileAddress> $profileAddress
     */
    public function __construct(?array $profileAddress = null)
    {
        $this
            ->setProfileAddress($profileAddress)
        ;
    }

    /**
     * Get ProfileAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\ProfileAddress>
     */
    public function getProfileAddress(): ?array
    {
        return $this->ProfileAddress ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setProfileAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProfileAddress method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProfileAddressForArrayConstraintFromSetProfileAddress(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfProfileAddressProfileAddressItem) {
            // validation for constraint: itemType
            if (!$arrayOfProfileAddressProfileAddressItem instanceof \Scraper\ScraperDPD\StructType\ProfileAddress) {
                $invalidValues[] = \is_object($arrayOfProfileAddressProfileAddressItem) ? $arrayOfProfileAddressProfileAddressItem::class : sprintf('%s(%s)', \gettype($arrayOfProfileAddressProfileAddressItem), var_export($arrayOfProfileAddressProfileAddressItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The ProfileAddress property can only contain items of type \Scraper\ScraperDPD\StructType\ProfileAddress, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set ProfileAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\ProfileAddress> $profileAddress
     *
     * @throws \InvalidArgumentException
     */
    public function setProfileAddress(?array $profileAddress = null): self
    {
        // validation for constraint: array
        if ('' !== ($profileAddressArrayErrorMessage = self::validateProfileAddressForArrayConstraintFromSetProfileAddress($profileAddress))) {
            throw new \InvalidArgumentException($profileAddressArrayErrorMessage, __LINE__);
        }

        if (null === $profileAddress || (\is_array($profileAddress) && empty($profileAddress))) {
            unset($this->ProfileAddress);
        } else {
            $this->ProfileAddress = $profileAddress;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\ProfileAddress
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\ProfileAddress
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\ProfileAddress
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\ProfileAddress
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\ProfileAddress
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\ProfileAddress $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\ProfileAddress) {
            throw new \InvalidArgumentException(sprintf('The ProfileAddress property can only contain items of type \Scraper\ScraperDPD\StructType\ProfileAddress, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string ProfileAddress
     */
    public function getAttributeName(): string
    {
        return 'ProfileAddress';
    }
}
