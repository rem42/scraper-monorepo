<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSlaveRequest ArrayType
 */
class ArrayOfSlaveRequest extends AbstractStructArrayBase
{
    /**
     * The SlaveRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\SlaveRequest>
     */
    protected ?array $SlaveRequest = null;

    /**
     * Constructor method for ArrayOfSlaveRequest
     *
     * @uses ArrayOfSlaveRequest::setSlaveRequest()
     *
     * @param array<\Scraper\ScraperDPD\StructType\SlaveRequest> $slaveRequest
     */
    public function __construct(?array $slaveRequest = null)
    {
        $this
            ->setSlaveRequest($slaveRequest)
        ;
    }

    /**
     * Get SlaveRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\SlaveRequest>
     */
    public function getSlaveRequest(): ?array
    {
        return $this->SlaveRequest ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setSlaveRequest method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSlaveRequest method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSlaveRequestForArrayConstraintFromSetSlaveRequest(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfSlaveRequestSlaveRequestItem) {
            // validation for constraint: itemType
            if (!$arrayOfSlaveRequestSlaveRequestItem instanceof \Scraper\ScraperDPD\StructType\SlaveRequest) {
                $invalidValues[] = \is_object($arrayOfSlaveRequestSlaveRequestItem) ? $arrayOfSlaveRequestSlaveRequestItem::class : sprintf('%s(%s)', \gettype($arrayOfSlaveRequestSlaveRequestItem), var_export($arrayOfSlaveRequestSlaveRequestItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The SlaveRequest property can only contain items of type \Scraper\ScraperDPD\StructType\SlaveRequest, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set SlaveRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\SlaveRequest> $slaveRequest
     *
     * @throws \InvalidArgumentException
     */
    public function setSlaveRequest(?array $slaveRequest = null): self
    {
        // validation for constraint: array
        if ('' !== ($slaveRequestArrayErrorMessage = self::validateSlaveRequestForArrayConstraintFromSetSlaveRequest($slaveRequest))) {
            throw new \InvalidArgumentException($slaveRequestArrayErrorMessage, __LINE__);
        }

        if (null === $slaveRequest || (\is_array($slaveRequest) && empty($slaveRequest))) {
            unset($this->SlaveRequest);
        } else {
            $this->SlaveRequest = $slaveRequest;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\SlaveRequest
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\SlaveRequest
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\SlaveRequest
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\SlaveRequest
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\SlaveRequest
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\SlaveRequest $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\SlaveRequest) {
            throw new \InvalidArgumentException(sprintf('The SlaveRequest property can only contain items of type \Scraper\ScraperDPD\StructType\SlaveRequest, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string SlaveRequest
     */
    public function getAttributeName(): string
    {
        return 'SlaveRequest';
    }
}
