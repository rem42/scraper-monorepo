<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ShipmentRequestDefaultData StructType
 */
#[\AllowDynamicProperties]
class ShipmentRequestDefaultData extends ShipmentRequestBase
{
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?StdServices $services = null;

    /**
     * Constructor method for ShipmentRequestDefaultData
     *
     * @uses ShipmentRequestDefaultData::setServices()
     */
    public function __construct(?StdServices $services = null)
    {
        $this
            ->setServices($services)
        ;
    }

    /**
     * Get services value
     */
    public function getServices(): ?StdServices
    {
        return $this->services;
    }

    /**
     * Set services value
     */
    public function setServices(?StdServices $services = null): self
    {
        $this->services = $services;

        return $this;
    }
}
