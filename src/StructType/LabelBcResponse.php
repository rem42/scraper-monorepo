<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for LabelBcResponse StructType
 */
#[\AllowDynamicProperties]
class LabelBcResponse extends LabelBaseResponse
{
    /**
     * The shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?BcDataExt $shipment = null;

    /**
     * Constructor method for LabelBcResponse
     *
     * @uses LabelBcResponse::setShipment()
     */
    public function __construct(?BcDataExt $shipment = null)
    {
        $this
            ->setShipment($shipment)
        ;
    }

    /**
     * Get shipment value
     */
    public function getShipment(): ?BcDataExt
    {
        return $this->shipment;
    }

    /**
     * Set shipment value
     */
    public function setShipment(?BcDataExt $shipment = null): self
    {
        $this->shipment = $shipment;

        return $this;
    }
}
