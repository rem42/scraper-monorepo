<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupAtCustomerRequestBase StructType
 */
#[\AllowDynamicProperties]
class PickupAtCustomerRequestBase extends AbstractStructBase
{
    /**
     * The shipperaddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Address $shipperaddress = null;
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $customer = null;
    /**
     * The pick_date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $pick_date = null;
    /**
     * The data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?PickupData $data = null;

    /**
     * Constructor method for PickupAtCustomerRequestBase
     *
     * @uses PickupAtCustomerRequestBase::setShipperaddress()
     * @uses PickupAtCustomerRequestBase::setCustomer()
     * @uses PickupAtCustomerRequestBase::setPick_date()
     * @uses PickupAtCustomerRequestBase::setData()
     */
    public function __construct(?Address $shipperaddress = null, ?Customer $customer = null, ?string $pick_date = null, ?PickupData $data = null)
    {
        $this
            ->setShipperaddress($shipperaddress)
            ->setCustomer($customer)
            ->setPick_date($pick_date)
            ->setData($data)
        ;
    }

    /**
     * Get shipperaddress value
     */
    public function getShipperaddress(): ?Address
    {
        return $this->shipperaddress;
    }

    /**
     * Set shipperaddress value
     */
    public function setShipperaddress(?Address $shipperaddress = null): self
    {
        $this->shipperaddress = $shipperaddress;

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

    /**
     * Get pick_date value
     */
    public function getPick_date(): ?string
    {
        return $this->pick_date;
    }

    /**
     * Set pick_date value
     */
    public function setPick_date(?string $pick_date = null): self
    {
        // validation for constraint: string
        if (null !== $pick_date && !\is_string($pick_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pick_date, true), \gettype($pick_date)), __LINE__);
        }
        $this->pick_date = $pick_date;

        return $this;
    }

    /**
     * Get data value
     */
    public function getData(): ?PickupData
    {
        return $this->data;
    }

    /**
     * Set data value
     */
    public function setData(?PickupData $data = null): self
    {
        $this->data = $data;

        return $this;
    }
}
