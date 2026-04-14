<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for MultiShipmentRequest StructType
 */
#[\AllowDynamicProperties]
class MultiShipmentRequest extends ShipmentRequestBase
{
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?MultiServices $services = null;
    /**
     * The slaves
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfSlaveRequest $slaves = null;

    /**
     * Constructor method for MultiShipmentRequest
     *
     * @uses MultiShipmentRequest::setServices()
     * @uses MultiShipmentRequest::setSlaves()
     */
    public function __construct(?MultiServices $services = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfSlaveRequest $slaves = null)
    {
        $this
            ->setServices($services)
            ->setSlaves($slaves)
        ;
    }

    /**
     * Get services value
     */
    public function getServices(): ?MultiServices
    {
        return $this->services;
    }

    /**
     * Set services value
     */
    public function setServices(?MultiServices $services = null): self
    {
        $this->services = $services;

        return $this;
    }

    /**
     * Get slaves value
     */
    public function getSlaves(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfSlaveRequest
    {
        return $this->slaves;
    }

    /**
     * Set slaves value
     */
    public function setSlaves(?\Scraper\ScraperDPD\ArrayType\ArrayOfSlaveRequest $slaves = null): self
    {
        $this->slaves = $slaves;

        return $this;
    }
}
