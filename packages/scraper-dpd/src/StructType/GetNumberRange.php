<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNumberRange StructType
 */
#[\AllowDynamicProperties]
class GetNumberRange extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?NumberRangeRequest $request = null;

    /**
     * Constructor method for GetNumberRange
     *
     * @uses GetNumberRange::setRequest()
     */
    public function __construct(?NumberRangeRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?NumberRangeRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?NumberRangeRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
