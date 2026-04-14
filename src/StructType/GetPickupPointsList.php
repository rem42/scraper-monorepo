<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickupPointsList StructType
 */
#[\AllowDynamicProperties]
class GetPickupPointsList extends AbstractStructBase
{
    /**
     * The GetPickupPointsListRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?GetPickupPointsListRequest $GetPickupPointsListRequest;

    /**
     * Constructor method for GetPickupPointsList
     *
     * @uses GetPickupPointsList::setGetPickupPointsListRequest()
     */
    public function __construct(?GetPickupPointsListRequest $getPickupPointsListRequest)
    {
        $this
            ->setGetPickupPointsListRequest($getPickupPointsListRequest)
        ;
    }

    /**
     * Get GetPickupPointsListRequest value
     */
    public function getGetPickupPointsListRequest(): GetPickupPointsListRequest
    {
        return $this->GetPickupPointsListRequest;
    }

    /**
     * Set GetPickupPointsListRequest value
     */
    public function setGetPickupPointsListRequest(?GetPickupPointsListRequest $getPickupPointsListRequest): self
    {
        $this->GetPickupPointsListRequest = $getPickupPointsListRequest;

        return $this;
    }
}
