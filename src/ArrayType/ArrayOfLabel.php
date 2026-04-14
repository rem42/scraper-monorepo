<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLabel ArrayType
 */
class ArrayOfLabel extends AbstractStructArrayBase
{
    /**
     * The Label
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\Label>
     */
    protected ?array $Label = null;

    /**
     * Constructor method for ArrayOfLabel
     *
     * @uses ArrayOfLabel::setLabel()
     *
     * @param array<\Scraper\ScraperDPD\StructType\Label> $label
     */
    public function __construct(?array $label = null)
    {
        $this
            ->setLabel($label)
        ;
    }

    /**
     * Get Label value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\Label>
     */
    public function getLabel(): ?array
    {
        return $this->Label ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setLabel method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLabel method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLabelForArrayConstraintFromSetLabel(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfLabelLabelItem) {
            // validation for constraint: itemType
            if (!$arrayOfLabelLabelItem instanceof \Scraper\ScraperDPD\StructType\Label) {
                $invalidValues[] = \is_object($arrayOfLabelLabelItem) ? $arrayOfLabelLabelItem::class : sprintf('%s(%s)', \gettype($arrayOfLabelLabelItem), var_export($arrayOfLabelLabelItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Label property can only contain items of type \Scraper\ScraperDPD\StructType\Label, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set Label value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\Label> $label
     *
     * @throws \InvalidArgumentException
     */
    public function setLabel(?array $label = null): self
    {
        // validation for constraint: array
        if ('' !== ($labelArrayErrorMessage = self::validateLabelForArrayConstraintFromSetLabel($label))) {
            throw new \InvalidArgumentException($labelArrayErrorMessage, __LINE__);
        }

        if (null === $label || (\is_array($label) && empty($label))) {
            unset($this->Label);
        } else {
            $this->Label = $label;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\Label
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\Label
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\Label
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\Label
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\Label
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\Label $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\Label) {
            throw new \InvalidArgumentException(sprintf('The Label property can only contain items of type \Scraper\ScraperDPD\StructType\Label, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string Label
     */
    public function getAttributeName(): string
    {
        return 'Label';
    }
}
