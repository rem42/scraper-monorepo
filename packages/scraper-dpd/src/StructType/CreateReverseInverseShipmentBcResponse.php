<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipmentBcResponse StructType
 */
#[\AllowDynamicProperties]
class CreateReverseInverseShipmentBcResponse extends AbstractStructBase
{
    /**
     * The CreateReverseInverseShipmentBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ShipmentBc $CreateReverseInverseShipmentBcResult = null;

    /**
     * Constructor method for CreateReverseInverseShipmentBcResponse
     *
     * @uses CreateReverseInverseShipmentBcResponse::setCreateReverseInverseShipmentBcResult()
     */
    public function __construct(?ShipmentBc $createReverseInverseShipmentBcResult = null)
    {
        $this
            ->setCreateReverseInverseShipmentBcResult($createReverseInverseShipmentBcResult)
        ;
    }

    /**
     * Get CreateReverseInverseShipmentBcResult value
     */
    public function getCreateReverseInverseShipmentBcResult(): ?ShipmentBc
    {
        return $this->CreateReverseInverseShipmentBcResult;
    }

    /**
     * Set CreateReverseInverseShipmentBcResult value
     */
    public function setCreateReverseInverseShipmentBcResult(?ShipmentBc $createReverseInverseShipmentBcResult = null): self
    {
        $this->CreateReverseInverseShipmentBcResult = $createReverseInverseShipmentBcResult;

        return $this;
    }
}
