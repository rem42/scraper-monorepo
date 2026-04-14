<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMultiShipmentResponse StructType
 */
#[\AllowDynamicProperties]
class CreateMultiShipmentResponse extends AbstractStructBase
{
    /**
     * The CreateMultiShipmentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?MultiShipment $CreateMultiShipmentResult = null;

    /**
     * Constructor method for CreateMultiShipmentResponse
     *
     * @uses CreateMultiShipmentResponse::setCreateMultiShipmentResult()
     */
    public function __construct(?MultiShipment $createMultiShipmentResult = null)
    {
        $this
            ->setCreateMultiShipmentResult($createMultiShipmentResult)
        ;
    }

    /**
     * Get CreateMultiShipmentResult value
     */
    public function getCreateMultiShipmentResult(): ?MultiShipment
    {
        return $this->CreateMultiShipmentResult;
    }

    /**
     * Set CreateMultiShipmentResult value
     */
    public function setCreateMultiShipmentResult(?MultiShipment $createMultiShipmentResult = null): self
    {
        $this->CreateMultiShipmentResult = $createMultiShipmentResult;

        return $this;
    }
}
