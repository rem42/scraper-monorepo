<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentDataBase StructType
 */
#[\AllowDynamicProperties]
class ShipmentDataBase extends AbstractStructBase
{
    /**
     * The customer_centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $customer_centernumber = null;
    /**
     * The customernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $customernumber = null;
    /**
     * The shipperaddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Address $shipperaddress = null;
    /**
     * The customeraddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Address $customeraddress = null;
    /**
     * The receiveraddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Address $receiveraddress = null;

    /**
     * Constructor method for ShipmentDataBase
     *
     * @uses ShipmentDataBase::setCustomer_centernumber()
     * @uses ShipmentDataBase::setCustomernumber()
     * @uses ShipmentDataBase::setShipperaddress()
     * @uses ShipmentDataBase::setCustomeraddress()
     * @uses ShipmentDataBase::setReceiveraddress()
     */
    public function __construct(?string $customer_centernumber = null, ?string $customernumber = null, ?Address $shipperaddress = null, ?Address $customeraddress = null, ?Address $receiveraddress = null)
    {
        $this
            ->setCustomer_centernumber($customer_centernumber)
            ->setCustomernumber($customernumber)
            ->setShipperaddress($shipperaddress)
            ->setCustomeraddress($customeraddress)
            ->setReceiveraddress($receiveraddress)
        ;
    }

    /**
     * Get customer_centernumber value
     */
    public function getCustomer_centernumber(): ?string
    {
        return $this->customer_centernumber;
    }

    /**
     * Set customer_centernumber value
     */
    public function setCustomer_centernumber(?string $customer_centernumber = null): self
    {
        // validation for constraint: string
        if (null !== $customer_centernumber && !\is_string($customer_centernumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customer_centernumber, true), \gettype($customer_centernumber)), __LINE__);
        }
        $this->customer_centernumber = $customer_centernumber;

        return $this;
    }

    /**
     * Get customernumber value
     */
    public function getCustomernumber(): ?string
    {
        return $this->customernumber;
    }

    /**
     * Set customernumber value
     */
    public function setCustomernumber(?string $customernumber = null): self
    {
        // validation for constraint: string
        if (null !== $customernumber && !\is_string($customernumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customernumber, true), \gettype($customernumber)), __LINE__);
        }
        $this->customernumber = $customernumber;

        return $this;
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
     * Get customeraddress value
     */
    public function getCustomeraddress(): ?Address
    {
        return $this->customeraddress;
    }

    /**
     * Set customeraddress value
     */
    public function setCustomeraddress(?Address $customeraddress = null): self
    {
        $this->customeraddress = $customeraddress;

        return $this;
    }

    /**
     * Get receiveraddress value
     */
    public function getReceiveraddress(): ?Address
    {
        return $this->receiveraddress;
    }

    /**
     * Set receiveraddress value
     */
    public function setReceiveraddress(?Address $receiveraddress = null): self
    {
        $this->receiveraddress = $receiveraddress;

        return $this;
    }
}
