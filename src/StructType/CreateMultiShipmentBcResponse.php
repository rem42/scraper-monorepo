<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMultiShipmentBcResponse StructType
 */
#[\AllowDynamicProperties]
class CreateMultiShipmentBcResponse extends AbstractStructBase
{
    /**
     * The CreateMultiShipmentBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?MultiShipmentBc $CreateMultiShipmentBcResult = null;

    /**
     * Constructor method for CreateMultiShipmentBcResponse
     *
     * @uses CreateMultiShipmentBcResponse::setCreateMultiShipmentBcResult()
     */
    public function __construct(?MultiShipmentBc $createMultiShipmentBcResult = null)
    {
        $this
            ->setCreateMultiShipmentBcResult($createMultiShipmentBcResult)
        ;
    }

    /**
     * Get CreateMultiShipmentBcResult value
     */
    public function getCreateMultiShipmentBcResult(): ?MultiShipmentBc
    {
        return $this->CreateMultiShipmentBcResult;
    }

    /**
     * Set CreateMultiShipmentBcResult value
     */
    public function setCreateMultiShipmentBcResult(?MultiShipmentBc $createMultiShipmentBcResult = null): self
    {
        $this->CreateMultiShipmentBcResult = $createMultiShipmentBcResult;

        return $this;
    }
}
