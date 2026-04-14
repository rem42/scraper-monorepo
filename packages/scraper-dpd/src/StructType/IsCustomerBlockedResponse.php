<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsCustomerBlockedResponse StructType
 */
#[\AllowDynamicProperties]
class IsCustomerBlockedResponse extends AbstractStructBase
{
    /**
     * The IsCustomerBlockedResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $IsCustomerBlockedResult;

    /**
     * Constructor method for IsCustomerBlockedResponse
     *
     * @uses IsCustomerBlockedResponse::setIsCustomerBlockedResult()
     */
    public function __construct(bool $isCustomerBlockedResult)
    {
        $this
            ->setIsCustomerBlockedResult($isCustomerBlockedResult)
        ;
    }

    /**
     * Get IsCustomerBlockedResult value
     */
    public function getIsCustomerBlockedResult(): bool
    {
        return $this->IsCustomerBlockedResult;
    }

    /**
     * Set IsCustomerBlockedResult value
     */
    public function setIsCustomerBlockedResult(bool $isCustomerBlockedResult): self
    {
        // validation for constraint: boolean
        if (null !== $isCustomerBlockedResult && !\is_bool($isCustomerBlockedResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCustomerBlockedResult, true), \gettype($isCustomerBlockedResult)), __LINE__);
        }
        $this->IsCustomerBlockedResult = $isCustomerBlockedResult;

        return $this;
    }
}
