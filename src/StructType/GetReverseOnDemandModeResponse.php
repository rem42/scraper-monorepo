<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetReverseOnDemandModeResponse StructType
 */
#[\AllowDynamicProperties]
class GetReverseOnDemandModeResponse extends AbstractStructBase
{
    /**
     * The GetReverseOnDemandModeResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $GetReverseOnDemandModeResult;

    /**
     * Constructor method for GetReverseOnDemandModeResponse
     *
     * @uses GetReverseOnDemandModeResponse::setGetReverseOnDemandModeResult()
     */
    public function __construct(int $getReverseOnDemandModeResult)
    {
        $this
            ->setGetReverseOnDemandModeResult($getReverseOnDemandModeResult)
        ;
    }

    /**
     * Get GetReverseOnDemandModeResult value
     */
    public function getGetReverseOnDemandModeResult(): int
    {
        return $this->GetReverseOnDemandModeResult;
    }

    /**
     * Set GetReverseOnDemandModeResult value
     */
    public function setGetReverseOnDemandModeResult(int $getReverseOnDemandModeResult): self
    {
        // validation for constraint: int
        if (null !== $getReverseOnDemandModeResult && !(\is_int($getReverseOnDemandModeResult) || ctype_digit($getReverseOnDemandModeResult))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($getReverseOnDemandModeResult, true), \gettype($getReverseOnDemandModeResult)), __LINE__);
        }
        $this->GetReverseOnDemandModeResult = $getReverseOnDemandModeResult;

        return $this;
    }
}
