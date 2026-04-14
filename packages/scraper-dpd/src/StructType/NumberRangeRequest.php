<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for NumberRangeRequest StructType
 */
#[\AllowDynamicProperties]
class NumberRangeRequest extends NumberRangeBaseRequest
{
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $CountryCode;
    /**
     * The ShippingCenterNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ShippingCenterNumber = null;
    /**
     * The NumberRangeFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumberRangeFrom = null;
    /**
     * The NumberRangeTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumberRangeTo = null;
    /**
     * The NumberRangeFree
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumberRangeFree = null;
    /**
     * The NumberType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumberType = null;

    /**
     * Constructor method for NumberRangeRequest
     *
     * @uses NumberRangeRequest::setCountryCode()
     * @uses NumberRangeRequest::setShippingCenterNumber()
     * @uses NumberRangeRequest::setNumberRangeFrom()
     * @uses NumberRangeRequest::setNumberRangeTo()
     * @uses NumberRangeRequest::setNumberRangeFree()
     * @uses NumberRangeRequest::setNumberType()
     */
    public function __construct(int $countryCode, ?string $shippingCenterNumber = null, ?string $numberRangeFrom = null, ?string $numberRangeTo = null, ?string $numberRangeFree = null, ?string $numberType = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setShippingCenterNumber($shippingCenterNumber)
            ->setNumberRangeFrom($numberRangeFrom)
            ->setNumberRangeTo($numberRangeTo)
            ->setNumberRangeFree($numberRangeFree)
            ->setNumberType($numberType)
        ;
    }

    /**
     * Get CountryCode value
     */
    public function getCountryCode(): int
    {
        return $this->CountryCode;
    }

    /**
     * Set CountryCode value
     */
    public function setCountryCode(int $countryCode): self
    {
        // validation for constraint: int
        if (null !== $countryCode && !(\is_int($countryCode) || ctype_digit($countryCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countryCode, true), \gettype($countryCode)), __LINE__);
        }
        $this->CountryCode = $countryCode;

        return $this;
    }

    /**
     * Get ShippingCenterNumber value
     */
    public function getShippingCenterNumber(): ?string
    {
        return $this->ShippingCenterNumber;
    }

    /**
     * Set ShippingCenterNumber value
     */
    public function setShippingCenterNumber(?string $shippingCenterNumber = null): self
    {
        // validation for constraint: string
        if (null !== $shippingCenterNumber && !\is_string($shippingCenterNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCenterNumber, true), \gettype($shippingCenterNumber)), __LINE__);
        }
        $this->ShippingCenterNumber = $shippingCenterNumber;

        return $this;
    }

    /**
     * Get NumberRangeFrom value
     */
    public function getNumberRangeFrom(): ?string
    {
        return $this->NumberRangeFrom;
    }

    /**
     * Set NumberRangeFrom value
     */
    public function setNumberRangeFrom(?string $numberRangeFrom = null): self
    {
        // validation for constraint: string
        if (null !== $numberRangeFrom && !\is_string($numberRangeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberRangeFrom, true), \gettype($numberRangeFrom)), __LINE__);
        }
        $this->NumberRangeFrom = $numberRangeFrom;

        return $this;
    }

    /**
     * Get NumberRangeTo value
     */
    public function getNumberRangeTo(): ?string
    {
        return $this->NumberRangeTo;
    }

    /**
     * Set NumberRangeTo value
     */
    public function setNumberRangeTo(?string $numberRangeTo = null): self
    {
        // validation for constraint: string
        if (null !== $numberRangeTo && !\is_string($numberRangeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberRangeTo, true), \gettype($numberRangeTo)), __LINE__);
        }
        $this->NumberRangeTo = $numberRangeTo;

        return $this;
    }

    /**
     * Get NumberRangeFree value
     */
    public function getNumberRangeFree(): ?string
    {
        return $this->NumberRangeFree;
    }

    /**
     * Set NumberRangeFree value
     */
    public function setNumberRangeFree(?string $numberRangeFree = null): self
    {
        // validation for constraint: string
        if (null !== $numberRangeFree && !\is_string($numberRangeFree)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberRangeFree, true), \gettype($numberRangeFree)), __LINE__);
        }
        $this->NumberRangeFree = $numberRangeFree;

        return $this;
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
