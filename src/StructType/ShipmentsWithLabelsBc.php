<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentsWithLabelsBc StructType
 */
#[\AllowDynamicProperties]
class ShipmentsWithLabelsBc extends AbstractStructBase
{
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $shipments = null;
    /**
     * The labels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null;

    /**
     * Constructor method for ShipmentsWithLabelsBc
     *
     * @uses ShipmentsWithLabelsBc::setShipments()
     * @uses ShipmentsWithLabelsBc::setLabels()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $shipments = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setShipments($shipments)
            ->setLabels($labels)
        ;
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
