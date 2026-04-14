<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipmentWithLabelsResponse StructType
 */
#[\AllowDynamicProperties]
class CreateReverseInverseShipmentWithLabelsResponse extends AbstractStructBase
{
    /**
     * The CreateReverseInverseShipmentWithLabelsResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ShipmentWithLabels $CreateReverseInverseShipmentWithLabelsResult = null;

    /**
     * Constructor method for CreateReverseInverseShipmentWithLabelsResponse
     *
     * @uses CreateReverseInverseShipmentWithLabelsResponse::setCreateReverseInverseShipmentWithLabelsResult()
     */
    public function __construct(?ShipmentWithLabels $createReverseInverseShipmentWithLabelsResult = null)
    {
        $this
            ->setCreateReverseInverseShipmentWithLabelsResult($createReverseInverseShipmentWithLabelsResult)
        ;
    }

    /**
     * Get CreateReverseInverseShipmentWithLabelsResult value
     */
    public function getCreateReverseInverseShipmentWithLabelsResult(): ?ShipmentWithLabels
    {
        return $this->CreateReverseInverseShipmentWithLabelsResult;
    }

    /**
     * Set CreateReverseInverseShipmentWithLabelsResult value
     */
    public function setCreateReverseInverseShipmentWithLabelsResult(?ShipmentWithLabels $createReverseInverseShipmentWithLabelsResult = null): self
    {
        $this->CreateReverseInverseShipmentWithLabelsResult = $createReverseInverseShipmentWithLabelsResult;

        return $this;
    }
}
