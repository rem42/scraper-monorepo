<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPhoneCall ArrayType
 */
class ArrayOfPhoneCall extends AbstractStructArrayBase
{
    /**
     * The PhoneCall
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\PhoneCall>
     */
    protected ?array $PhoneCall = null;

    /**
     * Constructor method for ArrayOfPhoneCall
     *
     * @uses ArrayOfPhoneCall::setPhoneCall()
     *
     * @param array<\Scraper\ScraperDPD\StructType\PhoneCall> $phoneCall
     */
    public function __construct(?array $phoneCall = null)
    {
        $this
            ->setPhoneCall($phoneCall)
        ;
    }

    /**
     * Get PhoneCall value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\PhoneCall>
     */
    public function getPhoneCall(): ?array
    {
        return $this->PhoneCall ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPhoneCall method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhoneCall method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhoneCallForArrayConstraintFromSetPhoneCall(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfPhoneCallPhoneCallItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhoneCallPhoneCallItem instanceof \Scraper\ScraperDPD\StructType\PhoneCall) {
                $invalidValues[] = \is_object($arrayOfPhoneCallPhoneCallItem) ? $arrayOfPhoneCallPhoneCallItem::class : sprintf('%s(%s)', \gettype($arrayOfPhoneCallPhoneCallItem), var_export($arrayOfPhoneCallPhoneCallItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The PhoneCall property can only contain items of type \Scraper\ScraperDPD\StructType\PhoneCall, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set PhoneCall value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\PhoneCall> $phoneCall
     *
     * @throws \InvalidArgumentException
     */
    public function setPhoneCall(?array $phoneCall = null): self
    {
        // validation for constraint: array
        if ('' !== ($phoneCallArrayErrorMessage = self::validatePhoneCallForArrayConstraintFromSetPhoneCall($phoneCall))) {
            throw new \InvalidArgumentException($phoneCallArrayErrorMessage, __LINE__);
        }

        if (null === $phoneCall || (\is_array($phoneCall) && empty($phoneCall))) {
            unset($this->PhoneCall);
        } else {
            $this->PhoneCall = $phoneCall;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\PhoneCall
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\PhoneCall
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\PhoneCall
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\PhoneCall
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\PhoneCall
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\PhoneCall $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\PhoneCall) {
            throw new \InvalidArgumentException(sprintf('The PhoneCall property can only contain items of type \Scraper\ScraperDPD\StructType\PhoneCall, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string PhoneCall
     */
    public function getAttributeName(): string
    {
        return 'PhoneCall';
    }
}
