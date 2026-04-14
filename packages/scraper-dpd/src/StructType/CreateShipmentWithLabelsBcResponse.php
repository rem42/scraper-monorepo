<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentWithLabelsBcResponse StructType
 */
#[\AllowDynamicProperties]
class CreateShipmentWithLabelsBcResponse extends AbstractStructBase
{
    /**
     * The CreateShipmentWithLabelsBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ShipmentsWithLabelsBc $CreateShipmentWithLabelsBcResult = null;

    /**
     * Constructor method for CreateShipmentWithLabelsBcResponse
     *
     * @uses CreateShipmentWithLabelsBcResponse::setCreateShipmentWithLabelsBcResult()
     */
    public function __construct(?ShipmentsWithLabelsBc $createShipmentWithLabelsBcResult = null)
    {
        $this
            ->setCreateShipmentWithLabelsBcResult($createShipmentWithLabelsBcResult)
        ;
    }

    /**
     * Get CreateShipmentWithLabelsBcResult value
     */
    public function getCreateShipmentWithLabelsBcResult(): ?ShipmentsWithLabelsBc
    {
        return $this->CreateShipmentWithLabelsBcResult;
    }

    /**
     * Set CreateShipmentWithLabelsBcResult value
     */
    public function setCreateShipmentWithLabelsBcResult(?ShipmentsWithLabelsBc $createShipmentWithLabelsBcResult = null): self
    {
        $this->CreateShipmentWithLabelsBcResult = $createShipmentWithLabelsBcResult;

        return $this;
    }
}
