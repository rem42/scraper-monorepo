<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentsWithLabels StructType
 */
#[\AllowDynamicProperties]
class ShipmentsWithLabels extends AbstractStructBase
{
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $shipments = null;
    /**
     * The labels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null;

    /**
     * Constructor method for ShipmentsWithLabels
     *
     * @uses ShipmentsWithLabels::setShipments()
     * @uses ShipmentsWithLabels::setLabels()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $shipments = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setShipments($shipments)
            ->setLabels($labels)
        ;
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
