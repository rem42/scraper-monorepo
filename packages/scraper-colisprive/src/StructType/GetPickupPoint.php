<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickupPoint StructType
 */
#[\AllowDynamicProperties]
class GetPickupPoint extends AbstractStructBase
{
    /**
     * The GetPickupPointRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?GetPickupPointRequest $GetPickupPointRequest;

    /**
     * Constructor method for GetPickupPoint
     *
     * @uses GetPickupPoint::setGetPickupPointRequest()
     */
    public function __construct(?GetPickupPointRequest $getPickupPointRequest)
    {
        $this
            ->setGetPickupPointRequest($getPickupPointRequest)
        ;
    }

    /**
     * Get GetPickupPointRequest value
     */
    public function getGetPickupPointRequest(): GetPickupPointRequest
    {
        return $this->GetPickupPointRequest;
    }

    /**
     * Set GetPickupPointRequest value
     */
    public function setGetPickupPointRequest(?GetPickupPointRequest $getPickupPointRequest): self
    {
        $this->GetPickupPointRequest = $getPickupPointRequest;

        return $this;
    }
}
