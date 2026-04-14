<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipmentWithLabelsBcResponse
 * StructType
 */
#[\AllowDynamicProperties]
class CreateReverseInverseShipmentWithLabelsBcResponse extends AbstractStructBase
{
    /**
     * The CreateReverseInverseShipmentWithLabelsBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ShipmentWithLabelsBc $CreateReverseInverseShipmentWithLabelsBcResult = null;

    /**
     * Constructor method for CreateReverseInverseShipmentWithLabelsBcResponse
     *
     * @uses CreateReverseInverseShipmentWithLabelsBcResponse::setCreateReverseInverseShipmentWithLabelsBcResult()
     */
    public function __construct(?ShipmentWithLabelsBc $createReverseInverseShipmentWithLabelsBcResult = null)
    {
        $this
            ->setCreateReverseInverseShipmentWithLabelsBcResult($createReverseInverseShipmentWithLabelsBcResult)
        ;
    }

    /**
     * Get CreateReverseInverseShipmentWithLabelsBcResult value
     */
    public function getCreateReverseInverseShipmentWithLabelsBcResult(): ?ShipmentWithLabelsBc
    {
        return $this->CreateReverseInverseShipmentWithLabelsBcResult;
    }

    /**
     * Set CreateReverseInverseShipmentWithLabelsBcResult value
     */
    public function setCreateReverseInverseShipmentWithLabelsBcResult(?ShipmentWithLabelsBc $createReverseInverseShipmentWithLabelsBcResult = null): self
    {
        $this->CreateReverseInverseShipmentWithLabelsBcResult = $createReverseInverseShipmentWithLabelsBcResult;

        return $this;
    }
}
