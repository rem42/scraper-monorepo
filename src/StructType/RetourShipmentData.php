<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for RetourShipmentData StructType
 */
#[\AllowDynamicProperties]
class RetourShipmentData extends ShipmentData
{
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?RetourServices $services = null;

    /**
     * Constructor method for RetourShipmentData
     *
     * @uses RetourShipmentData::setServices()
     */
    public function __construct(?RetourServices $services = null)
    {
        $this
            ->setServices($services)
        ;
    }

    /**
     * Get services value
     */
    public function getServices(): ?RetourServices
    {
        return $this->services;
    }

    /**
     * Set services value
     */
    public function setServices(?RetourServices $services = null): self
    {
        $this->services = $services;

        return $this;
    }
}
