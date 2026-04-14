<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRdvService ArrayType
 */
class ArrayOfRdvService extends AbstractStructArrayBase
{
    /**
     * The RdvService
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\RdvService>
     */
    protected ?array $RdvService = null;

    /**
     * Constructor method for ArrayOfRdvService
     *
     * @uses ArrayOfRdvService::setRdvService()
     *
     * @param array<\Scraper\ScraperDPD\StructType\RdvService> $rdvService
     */
    public function __construct(?array $rdvService = null)
    {
        $this
            ->setRdvService($rdvService)
        ;
    }

    /**
     * Get RdvService value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\RdvService>
     */
    public function getRdvService(): ?array
    {
        return $this->RdvService ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setRdvService method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRdvService method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRdvServiceForArrayConstraintFromSetRdvService(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfRdvServiceRdvServiceItem) {
            // validation for constraint: itemType
            if (!$arrayOfRdvServiceRdvServiceItem instanceof \Scraper\ScraperDPD\StructType\RdvService) {
                $invalidValues[] = \is_object($arrayOfRdvServiceRdvServiceItem) ? $arrayOfRdvServiceRdvServiceItem::class : sprintf('%s(%s)', \gettype($arrayOfRdvServiceRdvServiceItem), var_export($arrayOfRdvServiceRdvServiceItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The RdvService property can only contain items of type \Scraper\ScraperDPD\StructType\RdvService, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set RdvService value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\RdvService> $rdvService
     *
     * @throws \InvalidArgumentException
     */
    public function setRdvService(?array $rdvService = null): self
    {
        // validation for constraint: array
        if ('' !== ($rdvServiceArrayErrorMessage = self::validateRdvServiceForArrayConstraintFromSetRdvService($rdvService))) {
            throw new \InvalidArgumentException($rdvServiceArrayErrorMessage, __LINE__);
        }

        if (null === $rdvService || (\is_array($rdvService) && empty($rdvService))) {
            unset($this->RdvService);
        } else {
            $this->RdvService = $rdvService;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\RdvService
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\RdvService
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\RdvService
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\RdvService
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\RdvService
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\RdvService $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\RdvService) {
            throw new \InvalidArgumentException(sprintf('The RdvService property can only contain items of type \Scraper\ScraperDPD\StructType\RdvService, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string RdvService
     */
    public function getAttributeName(): string
    {
        return 'RdvService';
    }
}
