<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfText ArrayType
 */
class ArrayOfText extends AbstractStructArrayBase
{
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\Text>
     */
    protected ?array $Text = null;

    /**
     * Constructor method for ArrayOfText
     *
     * @uses ArrayOfText::setText()
     *
     * @param array<\Scraper\ScraperDPD\StructType\Text> $text
     */
    public function __construct(?array $text = null)
    {
        $this
            ->setText($text)
        ;
    }

    /**
     * Get Text value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\Text>
     */
    public function getText(): ?array
    {
        return $this->Text ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setText method
     * This method is willingly generated in order to preserve the one-line inline validation within the setText method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTextForArrayConstraintFromSetText(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfTextTextItem) {
            // validation for constraint: itemType
            if (!$arrayOfTextTextItem instanceof \Scraper\ScraperDPD\StructType\Text) {
                $invalidValues[] = \is_object($arrayOfTextTextItem) ? $arrayOfTextTextItem::class : sprintf('%s(%s)', \gettype($arrayOfTextTextItem), var_export($arrayOfTextTextItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The Text property can only contain items of type \Scraper\ScraperDPD\StructType\Text, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set Text value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\Text> $text
     *
     * @throws \InvalidArgumentException
     */
    public function setText(?array $text = null): self
    {
        // validation for constraint: array
        if ('' !== ($textArrayErrorMessage = self::validateTextForArrayConstraintFromSetText($text))) {
            throw new \InvalidArgumentException($textArrayErrorMessage, __LINE__);
        }

        if (null === $text || (\is_array($text) && empty($text))) {
            unset($this->Text);
        } else {
            $this->Text = $text;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\Text
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\Text
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\Text
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\Text
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\Text
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\Text $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\Text) {
            throw new \InvalidArgumentException(sprintf('The Text property can only contain items of type \Scraper\ScraperDPD\StructType\Text, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string Text
     */
    public function getAttributeName(): string
    {
        return 'Text';
    }
}
