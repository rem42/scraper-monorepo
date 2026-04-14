<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServiceNotice ArrayType
 */
class ArrayOfServiceNotice extends AbstractStructArrayBase
{
    /**
     * The ServiceNotice
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\ServiceNotice>
     */
    protected ?array $ServiceNotice = null;

    /**
     * Constructor method for ArrayOfServiceNotice
     *
     * @uses ArrayOfServiceNotice::setServiceNotice()
     *
     * @param array<\Scraper\ScraperDPD\StructType\ServiceNotice> $serviceNotice
     */
    public function __construct(?array $serviceNotice = null)
    {
        $this
            ->setServiceNotice($serviceNotice)
        ;
    }

    /**
     * Get ServiceNotice value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\ServiceNotice>
     */
    public function getServiceNotice(): ?array
    {
        return $this->ServiceNotice ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setServiceNotice method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceNotice method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceNoticeForArrayConstraintFromSetServiceNotice(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfServiceNoticeServiceNoticeItem) {
            // validation for constraint: itemType
            if (!$arrayOfServiceNoticeServiceNoticeItem instanceof \Scraper\ScraperDPD\StructType\ServiceNotice) {
                $invalidValues[] = \is_object($arrayOfServiceNoticeServiceNoticeItem) ? $arrayOfServiceNoticeServiceNoticeItem::class : sprintf('%s(%s)', \gettype($arrayOfServiceNoticeServiceNoticeItem), var_export($arrayOfServiceNoticeServiceNoticeItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceNotice property can only contain items of type \Scraper\ScraperDPD\StructType\ServiceNotice, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set ServiceNotice value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\ServiceNotice> $serviceNotice
     *
     * @throws \InvalidArgumentException
     */
    public function setServiceNotice(?array $serviceNotice = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceNoticeArrayErrorMessage = self::validateServiceNoticeForArrayConstraintFromSetServiceNotice($serviceNotice))) {
            throw new \InvalidArgumentException($serviceNoticeArrayErrorMessage, __LINE__);
        }

        if (null === $serviceNotice || (\is_array($serviceNotice) && empty($serviceNotice))) {
            unset($this->ServiceNotice);
        } else {
            $this->ServiceNotice = $serviceNotice;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\ServiceNotice
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\ServiceNotice
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\ServiceNotice
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\ServiceNotice
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\ServiceNotice
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\ServiceNotice $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\ServiceNotice) {
            throw new \InvalidArgumentException(sprintf('The ServiceNotice property can only contain items of type \Scraper\ScraperDPD\StructType\ServiceNotice, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string ServiceNotice
     */
    public function getAttributeName(): string
    {
        return 'ServiceNotice';
    }
}
