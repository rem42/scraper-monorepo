<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentBcResponse StructType
 */
#[\AllowDynamicProperties]
class GetShipmentBcResponse extends AbstractStructBase
{
    /**
     * The GetShipmentBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ShipmentDataExtendedBc $GetShipmentBcResult = null;

    /**
     * Constructor method for GetShipmentBcResponse
     *
     * @uses GetShipmentBcResponse::setGetShipmentBcResult()
     */
    public function __construct(?ShipmentDataExtendedBc $getShipmentBcResult = null)
    {
        $this
            ->setGetShipmentBcResult($getShipmentBcResult)
        ;
    }

    /**
     * Get GetShipmentBcResult value
     */
    public function getGetShipmentBcResult(): ?ShipmentDataExtendedBc
    {
        return $this->GetShipmentBcResult;
    }

    /**
     * Set GetShipmentBcResult value
     */
    public function setGetShipmentBcResult(?ShipmentDataExtendedBc $getShipmentBcResult = null): self
    {
        $this->GetShipmentBcResult = $getShipmentBcResult;

        return $this;
    }
}
