<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\ArrayType;

use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGetOptionResponse ArrayType
 */
class ArrayOfGetOptionResponse extends AbstractStructArrayBase
{
    /**
     * The GetOptionResponse
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     *
     * @var array<\Scraper\ScraperDPD\StructType\GetOptionResponse>
     */
    protected ?array $GetOptionResponse = null;

    /**
     * Constructor method for ArrayOfGetOptionResponse
     *
     * @uses ArrayOfGetOptionResponse::setGetOptionResponse()
     *
     * @param array<\Scraper\ScraperDPD\StructType\GetOptionResponse> $getOptionResponse
     */
    public function __construct(?array $getOptionResponse = null)
    {
        $this
            ->setGetOptionResponse($getOptionResponse)
        ;
    }

    /**
     * Get GetOptionResponse value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     *
     * @return array<\Scraper\ScraperDPD\StructType\GetOptionResponse>
     */
    public function getGetOptionResponse(): ?array
    {
        return $this->GetOptionResponse ?? null;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setGetOptionResponse method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetOptionResponse method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetOptionResponseForArrayConstraintFromSetGetOptionResponse(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $arrayOfGetOptionResponseGetOptionResponseItem) {
            // validation for constraint: itemType
            if (!$arrayOfGetOptionResponseGetOptionResponseItem instanceof \Scraper\ScraperDPD\StructType\GetOptionResponse) {
                $invalidValues[] = \is_object($arrayOfGetOptionResponseGetOptionResponseItem) ? $arrayOfGetOptionResponseGetOptionResponseItem::class : sprintf('%s(%s)', \gettype($arrayOfGetOptionResponseGetOptionResponseItem), var_export($arrayOfGetOptionResponseGetOptionResponseItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The GetOptionResponse property can only contain items of type \Scraper\ScraperDPD\StructType\GetOptionResponse, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set GetOptionResponse value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     *
     * @param array<\Scraper\ScraperDPD\StructType\GetOptionResponse> $getOptionResponse
     *
     * @throws \InvalidArgumentException
     */
    public function setGetOptionResponse(?array $getOptionResponse = null): self
    {
        // validation for constraint: array
        if ('' !== ($getOptionResponseArrayErrorMessage = self::validateGetOptionResponseForArrayConstraintFromSetGetOptionResponse($getOptionResponse))) {
            throw new \InvalidArgumentException($getOptionResponseArrayErrorMessage, __LINE__);
        }

        if (null === $getOptionResponse || (\is_array($getOptionResponse) && empty($getOptionResponse))) {
            unset($this->GetOptionResponse);
        } else {
            $this->GetOptionResponse = $getOptionResponse;
        }

        return $this;
    }

    /**
     * Returns the current element
     *
     * @see AbstractStructArrayBase::current()
     */
    public function current(): ?\Scraper\ScraperDPD\StructType\GetOptionResponse
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
    public function item($index): ?\Scraper\ScraperDPD\StructType\GetOptionResponse
    {
        return parent::item($index);
    }

    /**
     * Returns the first element
     *
     * @see AbstractStructArrayBase::first()
     */
    public function first(): ?\Scraper\ScraperDPD\StructType\GetOptionResponse
    {
        return parent::first();
    }

    /**
     * Returns the last element
     *
     * @see AbstractStructArrayBase::last()
     */
    public function last(): ?\Scraper\ScraperDPD\StructType\GetOptionResponse
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
    public function offsetGet($offset): ?\Scraper\ScraperDPD\StructType\GetOptionResponse
    {
        return parent::offsetGet($offset);
    }

    /**
     * Add element to array
     *
     * @see AbstractStructArrayBase::add()
     *
     * @param \Scraper\ScraperDPD\StructType\GetOptionResponse $item
     *
     * @throws \InvalidArgumentException
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperDPD\StructType\GetOptionResponse) {
            throw new \InvalidArgumentException(sprintf('The GetOptionResponse property can only contain items of type \Scraper\ScraperDPD\StructType\GetOptionResponse, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        return parent::add($item);
    }

    /**
     * Returns the attribute name
     *
     * @see AbstractStructArrayBase::getAttributeName()
     *
     * @return string GetOptionResponse
     */
    public function getAttributeName(): string
    {
        return 'GetOptionResponse';
    }
}
