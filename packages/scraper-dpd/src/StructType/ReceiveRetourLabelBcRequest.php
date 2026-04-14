<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ReceiveRetourLabelBcRequest StructType
 */
#[\AllowDynamicProperties]
class ReceiveRetourLabelBcRequest extends ReceiveRetourLabelRequestBase
{
    /**
     * The shipmentNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $shipmentNumber = null;
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $customer = null;

    /**
     * Constructor method for ReceiveRetourLabelBcRequest
     *
     * @uses ReceiveRetourLabelBcRequest::setShipmentNumber()
     * @uses ReceiveRetourLabelBcRequest::setCustomer()
     */
    public function __construct(?string $shipmentNumber = null, ?Customer $customer = null)
    {
        $this
            ->setShipmentNumber($shipmentNumber)
            ->setCustomer($customer)
        ;
    }

    /**
     * Get shipmentNumber value
     */
    public function getShipmentNumber(): ?string
    {
        return $this->shipmentNumber;
    }

    /**
     * Set shipmentNumber value
     */
    public function setShipmentNumber(?string $shipmentNumber = null): self
    {
        // validation for constraint: string
        if (null !== $shipmentNumber && !\is_string($shipmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentNumber, true), \gettype($shipmentNumber)), __LINE__);
        }
        $this->shipmentNumber = $shipmentNumber;

        return $this;
    }

    /**
     * Get customer value
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    /**
     * Set customer value
     */
    public function setCustomer(?Customer $customer = null): self
    {
        $this->customer = $customer;

        return $this;
    }
}
