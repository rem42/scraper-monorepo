<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLong ArrayType
 */
class ArrayOfLong extends AbstractStructArrayBase
{
    /**
     * The long
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     *
     * @var array<int>
     */
    protected ?array $long = null;

    /**
     * Constructor method for ArrayOfLong
     *
     * @uses ArrayOfLong::setLong()
     *
     * @param array<int> $long
     */
    public function __construct(?array $long = null)
    {
        $this
            ->setLong($long)
        ;
    }

    /**
     * Get long value
     *
     * @return array<int>
     */
    public function getLong(): ?array
    {
        return $this->long;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setLong method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLong method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLongForArrayConstraintFromSetLong(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfLongLongItem) {
            // validation for constraint: itemType
            if (!(\is_int($arrayOfLongLongItem) || ctype_digit($arrayOfLongLongItem))) {
                $invalidValues[] = \is_object($arrayOfLongLongItem) ? $arrayOfLongLongItem::class : sprintf('%s(%s)', \gettype($arrayOfLongLongItem), var_export($arrayOfLongLongItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The long property can only contain items of type int, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set long value
     *
     * @param array<int> $long
     *
     * @throws \InvalidArgumentException
     */
    public function setLong(?array $long = null): self
    {
        // validation for constraint: array
        if ('' !== ($longArrayErrorMessage = self::validateLongForArrayConstraintFromSetLong($long))) {
            throw new \InvalidArgumentException($longArrayErrorMessage, __LINE__);
        }
        $this->long = $long;

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?int
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
    public function item($index): ?int
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?int
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?int
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
    public function offsetGet($offset): ?int
    {
        return parent::offsetGet($offset);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string long
     */
    public function getAttributeName(): string
    {
        return 'long';
    }
}
