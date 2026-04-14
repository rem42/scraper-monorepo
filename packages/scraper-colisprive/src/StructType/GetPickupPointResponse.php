<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickupPointResponse StructType
 */
#[\AllowDynamicProperties]
class GetPickupPointResponse extends AbstractStructBase
{
    /**
     * The GetPickupPointResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetPickupPointReturn $GetPickupPointResult = null;

    /**
     * Constructor method for GetPickupPointResponse
     *
     * @uses GetPickupPointResponse::setGetPickupPointResult()
     */
    public function __construct(?GetPickupPointReturn $getPickupPointResult = null)
    {
        $this
            ->setGetPickupPointResult($getPickupPointResult)
        ;
    }

    /**
     * Get GetPickupPointResult value
     */
    public function getGetPickupPointResult(): ?GetPickupPointReturn
    {
        return $this->GetPickupPointResult;
    }

    /**
     * Set GetPickupPointResult value
     */
    public function setGetPickupPointResult(?GetPickupPointReturn $getPickupPointResult = null): self
    {
        $this->GetPickupPointResult = $getPickupPointResult;

        return $this;
    }
}
