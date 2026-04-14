<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsPickableOnDateResponse StructType
 */
#[\AllowDynamicProperties]
class IsPickableOnDateResponse extends AbstractStructBase
{
    /**
     * The IsPickableOnDateResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $IsPickableOnDateResult;

    /**
     * Constructor method for IsPickableOnDateResponse
     *
     * @uses IsPickableOnDateResponse::setIsPickableOnDateResult()
     */
    public function __construct(bool $isPickableOnDateResult)
    {
        $this
            ->setIsPickableOnDateResult($isPickableOnDateResult)
        ;
    }

    /**
     * Get IsPickableOnDateResult value
     */
    public function getIsPickableOnDateResult(): bool
    {
        return $this->IsPickableOnDateResult;
    }

    /**
     * Set IsPickableOnDateResult value
     */
    public function setIsPickableOnDateResult(bool $isPickableOnDateResult): self
    {
        // validation for constraint: boolean
        if (null !== $isPickableOnDateResult && !\is_bool($isPickableOnDateResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPickableOnDateResult, true), \gettype($isPickableOnDateResult)), __LINE__);
        }
        $this->IsPickableOnDateResult = $isPickableOnDateResult;

        return $this;
    }
}
