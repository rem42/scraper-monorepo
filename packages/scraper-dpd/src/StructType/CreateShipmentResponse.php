<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentResponse StructType
 */
#[\AllowDynamicProperties]
class CreateShipmentResponse extends AbstractStructBase
{
    /**
     * The CreateShipmentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $CreateShipmentResult = null;

    /**
     * Constructor method for CreateShipmentResponse
     *
     * @uses CreateShipmentResponse::setCreateShipmentResult()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $createShipmentResult = null)
    {
        $this
            ->setCreateShipmentResult($createShipmentResult)
        ;
    }

    /**
     * Get CreateShipmentResult value
     */
    public function getCreateShipmentResult(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment
    {
        return $this->CreateShipmentResult;
    }

    /**
     * Set CreateShipmentResult value
     */
    public function setCreateShipmentResult(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $createShipmentResult = null): self
    {
        $this->CreateShipmentResult = $createShipmentResult;

        return $this;
    }
}
