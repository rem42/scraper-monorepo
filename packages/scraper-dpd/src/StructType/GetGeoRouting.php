<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGeoRouting StructType
 */
#[\AllowDynamicProperties]
class GetGeoRouting extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GeoRoutingRequest $request = null;

    /**
     * Constructor method for GetGeoRouting
     *
     * @uses GetGeoRouting::setRequest()
     */
    public function __construct(?GeoRoutingRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?GeoRoutingRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?GeoRoutingRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
