<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiShipment StructType
 */
#[\AllowDynamicProperties]
class MultiShipment extends AbstractStructBase
{
    /**
     * The mastershipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Shipment $mastershipment = null;
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $shipments = null;

    /**
     * Constructor method for MultiShipment
     *
     * @uses MultiShipment::setMastershipment()
     * @uses MultiShipment::setShipments()
     */
    public function __construct(?Shipment $mastershipment = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $shipments = null)
    {
        $this
            ->setMastershipment($mastershipment)
            ->setShipments($shipments)
        ;
    }

    /**
     * Get mastershipment value
     */
    public function getMastershipment(): ?Shipment
    {
        return $this->mastershipment;
    }

    /**
     * Set mastershipment value
     */
    public function setMastershipment(?Shipment $mastershipment = null): self
    {
        $this->mastershipment = $mastershipment;

        return $this;
    }

    /**
     * Get shipments value
     */
    public function getShipments(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment
    {
        return $this->shipments;
    }

    /**
     * Set shipments value
     */
    public function setShipments(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $shipments = null): self
    {
        $this->shipments = $shipments;

        return $this;
    }
}
