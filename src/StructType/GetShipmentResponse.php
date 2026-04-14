<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentResponse StructType
 */
#[\AllowDynamicProperties]
class GetShipmentResponse extends AbstractStructBase
{
    /**
     * The GetShipmentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ShipmentDataExtended $GetShipmentResult = null;

    /**
     * Constructor method for GetShipmentResponse
     *
     * @uses GetShipmentResponse::setGetShipmentResult()
     */
    public function __construct(?ShipmentDataExtended $getShipmentResult = null)
    {
        $this
            ->setGetShipmentResult($getShipmentResult)
        ;
    }

    /**
     * Get GetShipmentResult value
     */
    public function getGetShipmentResult(): ?ShipmentDataExtended
    {
        return $this->GetShipmentResult;
    }

    /**
     * Set GetShipmentResult value
     */
    public function setGetShipmentResult(?ShipmentDataExtended $getShipmentResult = null): self
    {
        $this->GetShipmentResult = $getShipmentResult;

        return $this;
    }
}
