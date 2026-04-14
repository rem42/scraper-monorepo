<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCustomerProfile ArrayType
 */
class ArrayOfCustomerProfile extends AbstractStructArrayBase
{
    /**
     * The CustomerProfile
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\CustomerProfile>
     */
    protected ?array $CustomerProfile = null;

    /**
     * Constructor method for ArrayOfCustomerProfile
     *
     * @uses ArrayOfCustomerProfile::setCustomerProfile()
     *
     * @param array<\Scraper\ScraperDPD\StructType\CustomerProfile> $customerProfile
     */
    public function __construct(?array $customerProfile = null)
    {
        $this
            ->setCustomerProfile($customerProfile)
        ;
    }

    /**
     * Get CustomerProfile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\CustomerProfile>
     */
    public function getCustomerProfile(): ?array
    {
        return $this->CustomerProfile ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCustomerProfile method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCustomerProfile method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCustomerProfileForArrayConstraintFromSetCustomerProfile(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfCustomerProfileCustomerProfileItem) {
            // validation for constraint: itemType
            if (!$arrayOfCustomerProfileCustomerProfileItem instanceof \Scraper\ScraperDPD\StructType\CustomerProfile) {
                $invalidValues[] = \is_object($arrayOfCustomerProfileCustomerProfileItem) ? $arrayOfCustomerProfileCustomerProfileItem::class : sprintf('%s(%s)', \gettype($arrayOfCustomerProfileCustomerProfileItem), var_export($arrayOfCustomerProfileCustomerProfileItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The CustomerProfile property can only contain items of type \Scraper\ScraperDPD\StructType\CustomerProfile, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set CustomerProfile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\CustomerProfile> $customerProfile
     *
     * @throws \InvalidArgumentException
     */
    public function setCustomerProfile(?array $customerProfile = null): self
    {
        // validation for constraint: array
        if ('' !== ($customerProfileArrayErrorMessage = self::validateCustomerProfileForArrayConstraintFromSetCustomerProfile($customerProfile))) {
            throw new \InvalidArgumentException($customerProfileArrayErrorMessage, __LINE__);
        }

        if (null === $customerProfile || (\is_array($customerProfile) && empty($customerProfile))) {
            unset($this->CustomerProfile);
        } else {
            $this->CustomerProfile = $customerProfile;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\CustomerProfile
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\CustomerProfile
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\CustomerProfile
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\CustomerProfile
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\CustomerProfile
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\CustomerProfile $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\CustomerProfile) {
            throw new \InvalidArgumentException(sprintf('The CustomerProfile property can only contain items of type \Scraper\ScraperDPD\StructType\CustomerProfile, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string CustomerProfile
     */
    public function getAttributeName(): string
    {
        return 'CustomerProfile';
    }
}
