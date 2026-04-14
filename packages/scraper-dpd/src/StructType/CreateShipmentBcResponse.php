<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentBcResponse StructType
 */
#[\AllowDynamicProperties]
class CreateShipmentBcResponse extends AbstractStructBase
{
    /**
     * The CreateShipmentBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $CreateShipmentBcResult = null;

    /**
     * Constructor method for CreateShipmentBcResponse
     *
     * @uses CreateShipmentBcResponse::setCreateShipmentBcResult()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $createShipmentBcResult = null)
    {
        $this
            ->setCreateShipmentBcResult($createShipmentBcResult)
        ;
    }

    /**
     * Get CreateShipmentBcResult value
     */
    public function getCreateShipmentBcResult(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc
    {
        return $this->CreateShipmentBcResult;
    }

    /**
     * Set CreateShipmentBcResult value
     */
    public function setCreateShipmentBcResult(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $createShipmentBcResult = null): self
    {
        $this->CreateShipmentBcResult = $createShipmentBcResult;

        return $this;
    }
}
