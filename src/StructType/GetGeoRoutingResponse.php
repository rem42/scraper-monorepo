<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGeoRoutingResponse StructType
 */
#[\AllowDynamicProperties]
class GetGeoRoutingResponse extends AbstractStructBase
{
    /**
     * The GetGeoRoutingResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GeoRouting $GetGeoRoutingResult = null;

    /**
     * Constructor method for GetGeoRoutingResponse
     *
     * @uses GetGeoRoutingResponse::setGetGeoRoutingResult()
     */
    public function __construct(?GeoRouting $getGeoRoutingResult = null)
    {
        $this
            ->setGetGeoRoutingResult($getGeoRoutingResult)
        ;
    }

    /**
     * Get GetGeoRoutingResult value
     */
    public function getGetGeoRoutingResult(): ?GeoRouting
    {
        return $this->GetGeoRoutingResult;
    }

    /**
     * Set GetGeoRoutingResult value
     */
    public function setGetGeoRoutingResult(?GeoRouting $getGeoRoutingResult = null): self
    {
        $this->GetGeoRoutingResult = $getGeoRoutingResult;

        return $this;
    }
}
