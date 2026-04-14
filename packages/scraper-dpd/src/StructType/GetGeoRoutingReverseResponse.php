<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetGeoRoutingReverseResponse StructType
 */
#[\AllowDynamicProperties]
class GetGeoRoutingReverseResponse extends AbstractStructBase
{
    /**
     * The GetGeoRoutingReverseResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetGeoRoutingReverseResponse $GetGeoRoutingReverseResult = null;
    /**
     * The Reverse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GeoRouting $Reverse = null;
    /**
     * The ReverseRetour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GeoRouting $ReverseRetour = null;

    /**
     * Constructor method for GetGeoRoutingReverseResponse
     *
     * @uses GetGeoRoutingReverseResponse::setGetGeoRoutingReverseResult()
     * @uses GetGeoRoutingReverseResponse::setReverse()
     * @uses GetGeoRoutingReverseResponse::setReverseRetour()
     */
    public function __construct(?self $getGeoRoutingReverseResult = null, ?GeoRouting $reverse = null, ?GeoRouting $reverseRetour = null)
    {
        $this
            ->setGetGeoRoutingReverseResult($getGeoRoutingReverseResult)
            ->setReverse($reverse)
            ->setReverseRetour($reverseRetour)
        ;
    }

    /**
     * Get GetGeoRoutingReverseResult value
     */
    public function getGetGeoRoutingReverseResult(): ?self
    {
        return $this->GetGeoRoutingReverseResult;
    }

    /**
     * Set GetGeoRoutingReverseResult value
     */
    public function setGetGeoRoutingReverseResult(?self $getGeoRoutingReverseResult = null): self
    {
        $this->GetGeoRoutingReverseResult = $getGeoRoutingReverseResult;

        return $this;
    }

    /**
     * Get Reverse value
     */
    public function getReverse(): ?GeoRouting
    {
        return $this->Reverse;
    }

    /**
     * Set Reverse value
     */
    public function setReverse(?GeoRouting $reverse = null): self
    {
        $this->Reverse = $reverse;

        return $this;
    }

    /**
     * Get ReverseRetour value
     */
    public function getReverseRetour(): ?GeoRouting
    {
        return $this->ReverseRetour;
    }

    /**
     * Set ReverseRetour value
     */
    public function setReverseRetour(?GeoRouting $reverseRetour = null): self
    {
        $this->ReverseRetour = $reverseRetour;

        return $this;
    }
}
