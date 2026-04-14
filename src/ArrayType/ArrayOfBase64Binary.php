<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBase64Binary ArrayType
 */
class ArrayOfBase64Binary extends AbstractStructArrayBase
{
    /**
     * The base64Binary
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<string>
     */
    protected ?array $base64Binary = null;

    /**
     * Constructor method for ArrayOfBase64Binary
     *
     * @uses ArrayOfBase64Binary::setBase64Binary()
     *
     * @param array<string> $base64Binary
     */
    public function __construct(?array $base64Binary = null)
    {
        $this
            ->setBase64Binary($base64Binary)
        ;
    }

    /**
     * Get base64Binary value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<string>
     */
    public function getBase64Binary(): ?array
    {
        return $this->base64Binary ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setBase64Binary method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBase64Binary method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBase64BinaryForArrayConstraintFromSetBase64Binary(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfBase64BinaryBase64BinaryItem) {
            // validation for constraint: itemType
            if (!\is_string($arrayOfBase64BinaryBase64BinaryItem)) {
                $invalidValues[] = \is_object($arrayOfBase64BinaryBase64BinaryItem) ? $arrayOfBase64BinaryBase64BinaryItem::class : sprintf('%s(%s)', \gettype($arrayOfBase64BinaryBase64BinaryItem), var_export($arrayOfBase64BinaryBase64BinaryItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The base64Binary property can only contain items of type string, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set base64Binary value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<string> $base64Binary
     *
     * @throws \InvalidArgumentException
     */
    public function setBase64Binary(?array $base64Binary = null): self
    {
        // validation for constraint: array
        if ('' !== ($base64BinaryArrayErrorMessage = self::validateBase64BinaryForArrayConstraintFromSetBase64Binary($base64Binary))) {
            throw new \InvalidArgumentException($base64BinaryArrayErrorMessage, __LINE__);
        }

        if (null === $base64Binary || (\is_array($base64Binary) && empty($base64Binary))) {
            unset($this->base64Binary);
        } else {
            $this->base64Binary = $base64Binary;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?string
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
    public function item($index): ?string
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?string
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?string
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
    public function offsetGet($offset): ?string
    {
        return parent::offsetGet($offset);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string base64Binary
     */
    public function getAttributeName(): string
    {
        return 'base64Binary';
    }
}
