<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentWcsResponse StructType
 */
#[\AllowDynamicProperties]
class GetShipmentWcsResponse extends AbstractStructBase
{
    /**
     * The GetShipmentWcsResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ShipmentDataExtendedBcBase $GetShipmentWcsResult = null;

    /**
     * Constructor method for GetShipmentWcsResponse
     *
     * @uses GetShipmentWcsResponse::setGetShipmentWcsResult()
     */
    public function __construct(?ShipmentDataExtendedBcBase $getShipmentWcsResult = null)
    {
        $this
            ->setGetShipmentWcsResult($getShipmentWcsResult)
        ;
    }

    /**
     * Get GetShipmentWcsResult value
     */
    public function getGetShipmentWcsResult(): ?ShipmentDataExtendedBcBase
    {
        return $this->GetShipmentWcsResult;
    }

    /**
     * Set GetShipmentWcsResult value
     */
    public function setGetShipmentWcsResult(?ShipmentDataExtendedBcBase $getShipmentWcsResult = null): self
    {
        $this->GetShipmentWcsResult = $getShipmentWcsResult;

        return $this;
    }
}
