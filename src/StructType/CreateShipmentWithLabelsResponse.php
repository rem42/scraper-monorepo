<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentWithLabelsResponse StructType
 */
#[\AllowDynamicProperties]
class CreateShipmentWithLabelsResponse extends AbstractStructBase
{
    /**
     * The CreateShipmentWithLabelsResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ShipmentsWithLabels $CreateShipmentWithLabelsResult = null;

    /**
     * Constructor method for CreateShipmentWithLabelsResponse
     *
     * @uses CreateShipmentWithLabelsResponse::setCreateShipmentWithLabelsResult()
     */
    public function __construct(?ShipmentsWithLabels $createShipmentWithLabelsResult = null)
    {
        $this
            ->setCreateShipmentWithLabelsResult($createShipmentWithLabelsResult)
        ;
    }

    /**
     * Get CreateShipmentWithLabelsResult value
     */
    public function getCreateShipmentWithLabelsResult(): ?ShipmentsWithLabels
    {
        return $this->CreateShipmentWithLabelsResult;
    }

    /**
     * Set CreateShipmentWithLabelsResult value
     */
    public function setCreateShipmentWithLabelsResult(?ShipmentsWithLabels $createShipmentWithLabelsResult = null): self
    {
        $this->CreateShipmentWithLabelsResult = $createShipmentWithLabelsResult;

        return $this;
    }
}
