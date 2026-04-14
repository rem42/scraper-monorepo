<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfReason ArrayType
 */
class ArrayOfReason extends AbstractStructArrayBase
{
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\Reason>
     */
    protected ?array $Reason = null;

    /**
     * Constructor method for ArrayOfReason
     *
     * @uses ArrayOfReason::setReason()
     *
     * @param array<\Scraper\ScraperDPD\StructType\Reason> $reason
     */
    public function __construct(?array $reason = null)
    {
        $this
            ->setReason($reason)
        ;
    }

    /**
     * Get Reason value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\Reason>
     */
    public function getReason(): ?array
    {
        return $this->Reason ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setReason method
     * This method is willingly generated in order to preserve the one-line inline validation within the setReason method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateReasonForArrayConstraintFromSetReason(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfReasonReasonItem) {
            // validation for constraint: itemType
            if (!$arrayOfReasonReasonItem instanceof \Scraper\ScraperDPD\StructType\Reason) {
                $invalidValues[] = \is_object($arrayOfReasonReasonItem) ? $arrayOfReasonReasonItem::class : sprintf('%s(%s)', \gettype($arrayOfReasonReasonItem), var_export($arrayOfReasonReasonItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Reason property can only contain items of type \Scraper\ScraperDPD\StructType\Reason, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set Reason value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\Reason> $reason
     *
     * @throws \InvalidArgumentException
     */
    public function setReason(?array $reason = null): self
    {
        // validation for constraint: array
        if ('' !== ($reasonArrayErrorMessage = self::validateReasonForArrayConstraintFromSetReason($reason))) {
            throw new \InvalidArgumentException($reasonArrayErrorMessage, __LINE__);
        }

        if (null === $reason || (\is_array($reason) && empty($reason))) {
            unset($this->Reason);
        } else {
            $this->Reason = $reason;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\Reason
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\Reason
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\Reason
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\Reason
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\Reason
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\Reason $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\Reason) {
            throw new \InvalidArgumentException(sprintf('The Reason property can only contain items of type \Scraper\ScraperDPD\StructType\Reason, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string Reason
     */
    public function getAttributeName(): string
    {
        return 'Reason';
    }
}
