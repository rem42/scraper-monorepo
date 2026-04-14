<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNationalTransitTime StructType
 */
#[\AllowDynamicProperties]
class GetNationalTransitTime extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetNationalTransitTimeRequest $request = null;

    /**
     * Constructor method for GetNationalTransitTime
     *
     * @uses GetNationalTransitTime::setRequest()
     */
    public function __construct(?GetNationalTransitTimeRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?GetNationalTransitTimeRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?GetNationalTransitTimeRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
