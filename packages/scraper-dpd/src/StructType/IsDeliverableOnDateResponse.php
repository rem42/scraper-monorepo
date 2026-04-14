<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsDeliverableOnDateResponse StructType
 */
#[\AllowDynamicProperties]
class IsDeliverableOnDateResponse extends AbstractStructBase
{
    /**
     * The IsDeliverableOnDateResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $IsDeliverableOnDateResult;

    /**
     * Constructor method for IsDeliverableOnDateResponse
     *
     * @uses IsDeliverableOnDateResponse::setIsDeliverableOnDateResult()
     */
    public function __construct(bool $isDeliverableOnDateResult)
    {
        $this
            ->setIsDeliverableOnDateResult($isDeliverableOnDateResult)
        ;
    }

    /**
     * Get IsDeliverableOnDateResult value
     */
    public function getIsDeliverableOnDateResult(): bool
    {
        return $this->IsDeliverableOnDateResult;
    }

    /**
     * Set IsDeliverableOnDateResult value
     */
    public function setIsDeliverableOnDateResult(bool $isDeliverableOnDateResult): self
    {
        // validation for constraint: boolean
        if (null !== $isDeliverableOnDateResult && !\is_bool($isDeliverableOnDateResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDeliverableOnDateResult, true), \gettype($isDeliverableOnDateResult)), __LINE__);
        }
        $this->IsDeliverableOnDateResult = $isDeliverableOnDateResult;

        return $this;
    }
}
