<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentWithLabels StructType
 */
#[\AllowDynamicProperties]
class ShipmentWithLabels extends AbstractStructBase
{
    /**
     * The shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Shipment $shipment = null;
    /**
     * The labels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null;

    /**
     * Constructor method for ShipmentWithLabels
     *
     * @uses ShipmentWithLabels::setShipment()
     * @uses ShipmentWithLabels::setLabels()
     */
    public function __construct(?Shipment $shipment = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setShipment($shipment)
            ->setLabels($labels)
        ;
    }

    /**
     * Get shipment value
     */
    public function getShipment(): ?Shipment
    {
        return $this->shipment;
    }

    /**
     * Set shipment value
     */
    public function setShipment(?Shipment $shipment = null): self
    {
        $this->shipment = $shipment;

        return $this;
    }

    /**
     * Get labels value
     */
    public function getLabels(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel
    {
        return $this->labels;
    }

    /**
     * Set labels value
     */
    public function setLabels(?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null): self
    {
        $this->labels = $labels;

        return $this;
    }
}
