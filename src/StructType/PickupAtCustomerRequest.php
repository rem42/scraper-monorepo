<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for PickupAtCustomerRequest StructType
 */
#[\AllowDynamicProperties]
class PickupAtCustomerRequest extends PickupAtCustomerRequestBase
{
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfParcel $shipments = null;

    /**
     * Constructor method for PickupAtCustomerRequest
     *
     * @uses PickupAtCustomerRequest::setShipments()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfParcel $shipments = null)
    {
        $this
            ->setShipments($shipments)
        ;
    }

    /**
     * Get shipments value
     */
    public function getShipments(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfParcel
    {
        return $this->shipments;
    }

    /**
     * Set shipments value
     */
    public function setShipments(?\Scraper\ScraperDPD\ArrayType\ArrayOfParcel $shipments = null): self
    {
        $this->shipments = $shipments;

        return $this;
    }
}
