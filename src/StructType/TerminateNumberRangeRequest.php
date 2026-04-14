<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for TerminateNumberRangeRequest StructType
 */
#[\AllowDynamicProperties]
class TerminateNumberRangeRequest extends TerminateNumberRangeBaseRequest
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
     * - minOccurs: 1
     */
    protected int $ShippingCenterNumber;

    /**
     * Constructor method for TerminateNumberRangeRequest
     *
     * @uses TerminateNumberRangeRequest::setCountryCode()
     * @uses TerminateNumberRangeRequest::setShippingCenterNumber()
     */
    public function __construct(int $countryCode, int $shippingCenterNumber)
    {
        $this
            ->setCountryCode($countryCode)
            ->setShippingCenterNumber($shippingCenterNumber)
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
    public function getShippingCenterNumber(): int
    {
        return $this->ShippingCenterNumber;
    }

    /**
     * Set ShippingCenterNumber value
     */
    public function setShippingCenterNumber(int $shippingCenterNumber): self
    {
        // validation for constraint: int
        if (null !== $shippingCenterNumber && !(\is_int($shippingCenterNumber) || ctype_digit($shippingCenterNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shippingCenterNumber, true), \gettype($shippingCenterNumber)), __LINE__);
        }
        $this->ShippingCenterNumber = $shippingCenterNumber;

        return $this;
    }
}
