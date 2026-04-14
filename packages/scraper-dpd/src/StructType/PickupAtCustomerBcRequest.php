<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for PickupAtCustomerBcRequest StructType
 */
#[\AllowDynamicProperties]
class PickupAtCustomerBcRequest extends PickupAtCustomerRequestBase
{
    /**
     * The shipments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfString $shipments = null;

    /**
     * Constructor method for PickupAtCustomerBcRequest
     *
     * @uses PickupAtCustomerBcRequest::setShipments()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfString $shipments = null)
    {
        $this
            ->setShipments($shipments)
        ;
    }

    /**
     * Get shipments value
     */
    public function getShipments(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfString
    {
        return $this->shipments;
    }

    /**
     * Set shipments value
     */
    public function setShipments(?\Scraper\ScraperDPD\ArrayType\ArrayOfString $shipments = null): self
    {
        $this->shipments = $shipments;

        return $this;
    }
}
