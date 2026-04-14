<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipmentResponse StructType
 */
#[\AllowDynamicProperties]
class CreateReverseInverseShipmentResponse extends AbstractStructBase
{
    /**
     * The CreateReverseInverseShipmentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Shipment $CreateReverseInverseShipmentResult = null;

    /**
     * Constructor method for CreateReverseInverseShipmentResponse
     *
     * @uses CreateReverseInverseShipmentResponse::setCreateReverseInverseShipmentResult()
     */
    public function __construct(?Shipment $createReverseInverseShipmentResult = null)
    {
        $this
            ->setCreateReverseInverseShipmentResult($createReverseInverseShipmentResult)
        ;
    }

    /**
     * Get CreateReverseInverseShipmentResult value
     */
    public function getCreateReverseInverseShipmentResult(): ?Shipment
    {
        return $this->CreateReverseInverseShipmentResult;
    }

    /**
     * Set CreateReverseInverseShipmentResult value
     */
    public function setCreateReverseInverseShipmentResult(?Shipment $createReverseInverseShipmentResult = null): self
    {
        $this->CreateReverseInverseShipmentResult = $createReverseInverseShipmentResult;

        return $this;
    }
}
