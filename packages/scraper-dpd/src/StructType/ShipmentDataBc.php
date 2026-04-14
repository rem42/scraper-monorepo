<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ShipmentDataBc StructType
 */
#[\AllowDynamicProperties]
class ShipmentDataBc extends ShipmentDataBase
{
    /**
     * The shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?BcDataExt $shipment = null;
    /**
     * The shipmentRetour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?BcDataExt $shipmentRetour = null;

    /**
     * Constructor method for ShipmentDataBc
     *
     * @uses ShipmentDataBc::setShipment()
     * @uses ShipmentDataBc::setShipmentRetour()
     */
    public function __construct(?BcDataExt $shipment = null, ?BcDataExt $shipmentRetour = null)
    {
        $this
            ->setShipment($shipment)
            ->setShipmentRetour($shipmentRetour)
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

    /**
     * Get shipmentRetour value
     */
    public function getShipmentRetour(): ?BcDataExt
    {
        return $this->shipmentRetour;
    }

    /**
     * Set shipmentRetour value
     */
    public function setShipmentRetour(?BcDataExt $shipmentRetour = null): self
    {
        $this->shipmentRetour = $shipmentRetour;

        return $this;
    }
}
