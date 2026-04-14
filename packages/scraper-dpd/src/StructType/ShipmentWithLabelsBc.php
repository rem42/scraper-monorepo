<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentWithLabelsBc StructType
 */
#[\AllowDynamicProperties]
class ShipmentWithLabelsBc extends AbstractStructBase
{
    /**
     * The Shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ShipmentBc $Shipment = null;
    /**
     * The Labels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $Labels = null;

    /**
     * Constructor method for ShipmentWithLabelsBc
     *
     * @uses ShipmentWithLabelsBc::setShipment()
     * @uses ShipmentWithLabelsBc::setLabels()
     */
    public function __construct(?ShipmentBc $shipment = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setShipment($shipment)
            ->setLabels($labels)
        ;
    }

    /**
     * Get Shipment value
     */
    public function getShipment(): ?ShipmentBc
    {
        return $this->Shipment;
    }

    /**
     * Set Shipment value
     */
    public function setShipment(?ShipmentBc $shipment = null): self
    {
        $this->Shipment = $shipment;

        return $this;
    }

    /**
     * Get Labels value
     */
    public function getLabels(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel
    {
        return $this->Labels;
    }

    /**
     * Set Labels value
     */
    public function setLabels(?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null): self
    {
        $this->Labels = $labels;

        return $this;
    }
}
