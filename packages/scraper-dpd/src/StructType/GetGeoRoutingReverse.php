<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGeoRoutingReverse StructType
 */
#[\AllowDynamicProperties]
class GetGeoRoutingReverse extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GeoRoutingReverseRequest $request = null;

    /**
     * Constructor method for GetGeoRoutingReverse
     *
     * @uses GetGeoRoutingReverse::setRequest()
     */
    public function __construct(?GeoRoutingReverseRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?GeoRoutingReverseRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?GeoRoutingReverseRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
