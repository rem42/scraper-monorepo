<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickupPointsListResponse StructType
 */
#[\AllowDynamicProperties]
class GetPickupPointsListResponse extends AbstractStructBase
{
    /**
     * The GetPickupPointsListResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetPickupPointsListReturn $GetPickupPointsListResult = null;

    /**
     * Constructor method for GetPickupPointsListResponse
     *
     * @uses GetPickupPointsListResponse::setGetPickupPointsListResult()
     */
    public function __construct(?GetPickupPointsListReturn $getPickupPointsListResult = null)
    {
        $this
            ->setGetPickupPointsListResult($getPickupPointsListResult)
        ;
    }

    /**
     * Get GetPickupPointsListResult value
     */
    public function getGetPickupPointsListResult(): ?GetPickupPointsListReturn
    {
        return $this->GetPickupPointsListResult;
    }

    /**
     * Set GetPickupPointsListResult value
     */
    public function setGetPickupPointsListResult(?GetPickupPointsListReturn $getPickupPointsListResult = null): self
    {
        $this->GetPickupPointsListResult = $getPickupPointsListResult;

        return $this;
    }
}
