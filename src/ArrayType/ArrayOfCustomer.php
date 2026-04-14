<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCustomer ArrayType
 */
class ArrayOfCustomer extends AbstractStructArrayBase
{
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\Customer>
     */
    protected ?array $Customer = null;

    /**
     * Constructor method for ArrayOfCustomer
     *
     * @uses ArrayOfCustomer::setCustomer()
     *
     * @param array<\Scraper\ScraperDPD\StructType\Customer> $customer
     */
    public function __construct(?array $customer = null)
    {
        $this
            ->setCustomer($customer)
        ;
    }

    /**
     * Get Customer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\Customer>
     */
    public function getCustomer(): ?array
    {
        return $this->Customer ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCustomer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomer method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerForArrayConstraintFromSetCustomer(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfCustomerCustomerItem) {
            // validation for constraint: itemType
            if (!$arrayOfCustomerCustomerItem instanceof \Scraper\ScraperDPD\StructType\Customer) {
                $invalidValues[] = \is_object($arrayOfCustomerCustomerItem) ? $arrayOfCustomerCustomerItem::class : sprintf('%s(%s)', \gettype($arrayOfCustomerCustomerItem), var_export($arrayOfCustomerCustomerItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Customer property can only contain items of type \Scraper\ScraperDPD\StructType\Customer, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set Customer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\Customer> $customer
     *
     * @throws \InvalidArgumentException
     */
    public function setCustomer(?array $customer = null): self
    {
        // validation for constraint: array
        if ('' !== ($customerArrayErrorMessage = self::validateCustomerForArrayConstraintFromSetCustomer($customer))) {
            throw new \InvalidArgumentException($customerArrayErrorMessage, __LINE__);
        }

        if (null === $customer || (\is_array($customer) && empty($customer))) {
            unset($this->Customer);
        } else {
            $this->Customer = $customer;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\Customer
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\Customer
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\Customer
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\Customer
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\Customer
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\Customer $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\Customer) {
            throw new \InvalidArgumentException(sprintf('The Customer property can only contain items of type \Scraper\ScraperDPD\StructType\Customer, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string Customer
     */
    public function getAttributeName(): string
    {
        return 'Customer';
    }
}
