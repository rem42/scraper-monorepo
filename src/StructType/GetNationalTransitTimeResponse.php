<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNationalTransitTimeResponse StructType
 */
#[\AllowDynamicProperties]
class GetNationalTransitTimeResponse extends AbstractStructBase
{
    /**
     * The TransitTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $TransitTime;
    /**
     * The GetNationalTransitTimeResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetNationalTransitTimeResponse $GetNationalTransitTimeResult = null;

    /**
     * Constructor method for GetNationalTransitTimeResponse
     *
     * @uses GetNationalTransitTimeResponse::setTransitTime()
     * @uses GetNationalTransitTimeResponse::setGetNationalTransitTimeResult()
     */
    public function __construct(int $transitTime, ?self $getNationalTransitTimeResult = null)
    {
        $this
            ->setTransitTime($transitTime)
            ->setGetNationalTransitTimeResult($getNationalTransitTimeResult)
        ;
    }

    /**
     * Get TransitTime value
     */
    public function getTransitTime(): int
    {
        return $this->TransitTime;
    }

    /**
     * Set TransitTime value
     */
    public function setTransitTime(int $transitTime): self
    {
        // validation for constraint: int
        if (null !== $transitTime && !(\is_int($transitTime) || ctype_digit($transitTime))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transitTime, true), \gettype($transitTime)), __LINE__);
        }
        $this->TransitTime = $transitTime;

        return $this;
    }

    /**
     * Get GetNationalTransitTimeResult value
     */
    public function getGetNationalTransitTimeResult(): ?self
    {
        return $this->GetNationalTransitTimeResult;
    }

    /**
     * Set GetNationalTransitTimeResult value
     */
    public function setGetNationalTransitTimeResult(?self $getNationalTransitTimeResult = null): self
    {
        $this->GetNationalTransitTimeResult = $getNationalTransitTimeResult;

        return $this;
    }
}
