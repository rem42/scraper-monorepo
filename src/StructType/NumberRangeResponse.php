<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for NumberRangeResponse StructType
 */
#[\AllowDynamicProperties]
class NumberRangeResponse extends NumberRangeBaseResponse
{
    /**
     * The CountryCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $CountryCode;
    /**
     * The CenterNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $CenterNumber;

    /**
     * Constructor method for NumberRangeResponse
     *
     * @uses NumberRangeResponse::setCountryCode()
     * @uses NumberRangeResponse::setCenterNumber()
     */
    public function __construct(int $countryCode, int $centerNumber)
    {
        $this
            ->setCountryCode($countryCode)
            ->setCenterNumber($centerNumber)
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
     * Get CenterNumber value
     */
    public function getCenterNumber(): int
    {
        return $this->CenterNumber;
    }

    /**
     * Set CenterNumber value
     */
    public function setCenterNumber(int $centerNumber): self
    {
        // validation for constraint: int
        if (null !== $centerNumber && !(\is_int($centerNumber) || ctype_digit($centerNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($centerNumber, true), \gettype($centerNumber)), __LINE__);
        }
        $this->CenterNumber = $centerNumber;

        return $this;
    }
}
