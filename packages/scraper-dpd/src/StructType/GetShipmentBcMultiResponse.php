<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentBcMultiResponse StructType
 */
#[\AllowDynamicProperties]
class GetShipmentBcMultiResponse extends AbstractStructBase
{
    /**
     * The GetShipmentBcMultiResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetShipmentBcMultiResponse $GetShipmentBcMultiResult = null;
    /**
     * The Shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfGetShipmentEntry $Shipments = null;

    /**
     * Constructor method for GetShipmentBcMultiResponse
     *
     * @uses GetShipmentBcMultiResponse::setGetShipmentBcMultiResult()
     * @uses GetShipmentBcMultiResponse::setShipments()
     */
    public function __construct(?self $getShipmentBcMultiResult = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfGetShipmentEntry $shipments = null)
    {
        $this
            ->setGetShipmentBcMultiResult($getShipmentBcMultiResult)
            ->setShipments($shipments)
        ;
    }

    /**
     * Get GetShipmentBcMultiResult value
     */
    public function getGetShipmentBcMultiResult(): ?self
    {
        return $this->GetShipmentBcMultiResult;
    }

    /**
     * Set GetShipmentBcMultiResult value
     */
    public function setGetShipmentBcMultiResult(?self $getShipmentBcMultiResult = null): self
    {
        $this->GetShipmentBcMultiResult = $getShipmentBcMultiResult;

        return $this;
    }

    /**
     * Get Shipments value
     */
    public function getShipments(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfGetShipmentEntry
    {
        return $this->Shipments;
    }

    /**
     * Set Shipments value
     */
    public function setShipments(?\Scraper\ScraperDPD\ArrayType\ArrayOfGetShipmentEntry $shipments = null): self
    {
        $this->Shipments = $shipments;

        return $this;
    }
}
