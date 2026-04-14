<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MultiShipmentBc StructType
 */
#[\AllowDynamicProperties]
class MultiShipmentBc extends AbstractStructBase
{
    /**
     * The mastershipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ShipmentBc $mastershipment = null;
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $shipments = null;

    /**
     * Constructor method for MultiShipmentBc
     *
     * @uses MultiShipmentBc::setMastershipment()
     * @uses MultiShipmentBc::setShipments()
     */
    public function __construct(?ShipmentBc $mastershipment = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $shipments = null)
    {
        $this
            ->setMastershipment($mastershipment)
            ->setShipments($shipments)
        ;
    }

    /**
     * Get mastershipment value
     */
    public function getMastershipment(): ?ShipmentBc
    {
        return $this->mastershipment;
    }

    /**
     * Set mastershipment value
     */
    public function setMastershipment(?ShipmentBc $mastershipment = null): self
    {
        $this->mastershipment = $mastershipment;

        return $this;
    }

    /**
     * Get shipments value
     */
    public function getShipments(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc
    {
        return $this->shipments;
    }

    /**
     * Set shipments value
     */
    public function setShipments(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $shipments = null): self
    {
        $this->shipments = $shipments;

        return $this;
    }
}
