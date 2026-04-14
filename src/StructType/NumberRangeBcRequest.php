<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for NumberRangeBcRequest StructType
 */
#[\AllowDynamicProperties]
class NumberRangeBcRequest extends NumberRangeBcBaseRequest
{
    /**
     * The NumberType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumberType = null;

    /**
     * Constructor method for NumberRangeBcRequest
     *
     * @uses NumberRangeBcRequest::setNumberType()
     */
    public function __construct(?string $numberType = null)
    {
        $this
            ->setNumberType($numberType)
        ;
    }

    /**
     * Get NumberType value
     */
    public function getNumberType(): ?string
    {
        return $this->NumberType;
    }

    /**
     * Set NumberType value
     */
    public function setNumberType(?string $numberType = null): self
    {
        // validation for constraint: string
        if (null !== $numberType && !\is_string($numberType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberType, true), \gettype($numberType)), __LINE__);
        }
        $this->NumberType = $numberType;

        return $this;
    }
}
