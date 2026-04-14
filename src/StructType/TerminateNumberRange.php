<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerminateNumberRange StructType
 */
#[\AllowDynamicProperties]
class TerminateNumberRange extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?TerminateNumberRangeRequest $request = null;

    /**
     * Constructor method for TerminateNumberRange
     *
     * @uses TerminateNumberRange::setRequest()
     */
    public function __construct(?TerminateNumberRangeRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?TerminateNumberRangeRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?TerminateNumberRangeRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
