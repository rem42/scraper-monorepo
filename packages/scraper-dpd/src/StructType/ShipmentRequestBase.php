<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentRequestBase StructType
 */
#[\AllowDynamicProperties]
class ShipmentRequestBase extends AbstractStructBase
{
    /**
     * The customer_countrycode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $customer_countrycode;
    /**
     * The customer_centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $customer_centernumber;
    /**
     * The customer_number
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $customer_number;
    /**
     * The receiveraddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Address $receiveraddress = null;
    /**
     * The receiverinfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?AddressInfo $receiverinfo = null;
    /**
     * The shipperaddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Address $shipperaddress = null;
    /**
     * The shipperinfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?AddressInfo $shipperinfo = null;
    /**
     * The retourAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Address $retourAddress = null;
    /**
     * The shippingdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $shippingdate = null;

    /**
     * Constructor method for ShipmentRequestBase
     *
     * @uses ShipmentRequestBase::setCustomer_countrycode()
     * @uses ShipmentRequestBase::setCustomer_centernumber()
     * @uses ShipmentRequestBase::setCustomer_number()
     * @uses ShipmentRequestBase::setReceiveraddress()
     * @uses ShipmentRequestBase::setReceiverinfo()
     * @uses ShipmentRequestBase::setShipperaddress()
     * @uses ShipmentRequestBase::setShipperinfo()
     * @uses ShipmentRequestBase::setRetourAddress()
     * @uses ShipmentRequestBase::setShippingdate()
     */
    public function __construct(int $customer_countrycode, int $customer_centernumber, int $customer_number, ?Address $receiveraddress = null, ?AddressInfo $receiverinfo = null, ?Address $shipperaddress = null, ?AddressInfo $shipperinfo = null, ?Address $retourAddress = null, ?string $shippingdate = null)
    {
        $this
            ->setCustomer_countrycode($customer_countrycode)
            ->setCustomer_centernumber($customer_centernumber)
            ->setCustomer_number($customer_number)
            ->setReceiveraddress($receiveraddress)
            ->setReceiverinfo($receiverinfo)
            ->setShipperaddress($shipperaddress)
            ->setShipperinfo($shipperinfo)
            ->setRetourAddress($retourAddress)
            ->setShippingdate($shippingdate)
        ;
    }

    /**
     * Get customer_countrycode value
     */
    public function getCustomer_countrycode(): int
    {
        return $this->customer_countrycode;
    }

    /**
     * Set customer_countrycode value
     */
    public function setCustomer_countrycode(int $customer_countrycode): self
    {
        // validation for constraint: int
        if (null !== $customer_countrycode && !(\is_int($customer_countrycode) || ctype_digit($customer_countrycode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customer_countrycode, true), \gettype($customer_countrycode)), __LINE__);
        }
        $this->customer_countrycode = $customer_countrycode;

        return $this;
    }

    /**
     * Get customer_centernumber value
     */
    public function getCustomer_centernumber(): int
    {
        return $this->customer_centernumber;
    }

    /**
     * Set customer_centernumber value
     */
    public function setCustomer_centernumber(int $customer_centernumber): self
    {
        // validation for constraint: int
        if (null !== $customer_centernumber && !(\is_int($customer_centernumber) || ctype_digit($customer_centernumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customer_centernumber, true), \gettype($customer_centernumber)), __LINE__);
        }
        $this->customer_centernumber = $customer_centernumber;

        return $this;
    }

    /**
     * Get customer_number value
     */
    public function getCustomer_number(): int
    {
        return $this->customer_number;
    }

    /**
     * Set customer_number value
     */
    public function setCustomer_number(int $customer_number): self
    {
        // validation for constraint: int
        if (null !== $customer_number && !(\is_int($customer_number) || ctype_digit($customer_number))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customer_number, true), \gettype($customer_number)), __LINE__);
        }
        $this->customer_number = $customer_number;

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

    /**
     * Get receiverinfo value
     */
    public function getReceiverinfo(): ?AddressInfo
    {
        return $this->receiverinfo;
    }

    /**
     * Set receiverinfo value
     */
    public function setReceiverinfo(?AddressInfo $receiverinfo = null): self
    {
        $this->receiverinfo = $receiverinfo;

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
     * Get shipperinfo value
     */
    public function getShipperinfo(): ?AddressInfo
    {
        return $this->shipperinfo;
    }

    /**
     * Set shipperinfo value
     */
    public function setShipperinfo(?AddressInfo $shipperinfo = null): self
    {
        $this->shipperinfo = $shipperinfo;

        return $this;
    }

    /**
     * Get retourAddress value
     */
    public function getRetourAddress(): ?Address
    {
        return $this->retourAddress;
    }

    /**
     * Set retourAddress value
     */
    public function setRetourAddress(?Address $retourAddress = null): self
    {
        $this->retourAddress = $retourAddress;

        return $this;
    }

    /**
     * Get shippingdate value
     */
    public function getShippingdate(): ?string
    {
        return $this->shippingdate;
    }

    /**
     * Set shippingdate value
     */
    public function setShippingdate(?string $shippingdate = null): self
    {
        // validation for constraint: string
        if (null !== $shippingdate && !\is_string($shippingdate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingdate, true), \gettype($shippingdate)), __LINE__);
        }
        $this->shippingdate = $shippingdate;

        return $this;
    }
}
