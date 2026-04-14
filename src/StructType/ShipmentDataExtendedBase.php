<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentDataExtendedBase StructType
 */
#[\AllowDynamicProperties]
class ShipmentDataExtendedBase extends AbstractStructBase
{
    /**
     * The shipperCenter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $shipperCenter;
    /**
     * The receiverCenter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $receiverCenter;
    /**
     * The receiverTourNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $receiverTourNumber;
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
     * The weight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $weight = null;
    /**
     * The shipping_date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $shipping_date = null;
    /**
     * The referencenumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $referencenumber = null;
    /**
     * The reference2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $reference2 = null;
    /**
     * The reference3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $reference3 = null;
    /**
     * The reference4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $reference4 = null;
    /**
     * The referenceInternational
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $referenceInternational = null;
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
     * The receiver_contact
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Contact $receiver_contact = null;
    /**
     * The pickup_remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $pickup_remark = null;
    /**
     * The deliver_remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $deliver_remark = null;
    /**
     * The receiverinfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?AddressInfo $receiverinfo = null;
    /**
     * The Dimension
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ParcelDimension $Dimension = null;

    /**
     * Constructor method for ShipmentDataExtendedBase
     *
     * @uses ShipmentDataExtendedBase::setShipperCenter()
     * @uses ShipmentDataExtendedBase::setReceiverCenter()
     * @uses ShipmentDataExtendedBase::setReceiverTourNumber()
     * @uses ShipmentDataExtendedBase::setCustomer_centernumber()
     * @uses ShipmentDataExtendedBase::setCustomernumber()
     * @uses ShipmentDataExtendedBase::setWeight()
     * @uses ShipmentDataExtendedBase::setShipping_date()
     * @uses ShipmentDataExtendedBase::setReferencenumber()
     * @uses ShipmentDataExtendedBase::setReference2()
     * @uses ShipmentDataExtendedBase::setReference3()
     * @uses ShipmentDataExtendedBase::setReference4()
     * @uses ShipmentDataExtendedBase::setReferenceInternational()
     * @uses ShipmentDataExtendedBase::setShipperaddress()
     * @uses ShipmentDataExtendedBase::setCustomeraddress()
     * @uses ShipmentDataExtendedBase::setReceiveraddress()
     * @uses ShipmentDataExtendedBase::setReceiver_contact()
     * @uses ShipmentDataExtendedBase::setPickup_remark()
     * @uses ShipmentDataExtendedBase::setDeliver_remark()
     * @uses ShipmentDataExtendedBase::setReceiverinfo()
     * @uses ShipmentDataExtendedBase::setDimension()
     */
    public function __construct(int $shipperCenter, int $receiverCenter, int $receiverTourNumber, ?string $customer_centernumber = null, ?string $customernumber = null, ?string $weight = null, ?string $shipping_date = null, ?string $referencenumber = null, ?string $reference2 = null, ?string $reference3 = null, ?string $reference4 = null, ?string $referenceInternational = null, ?Address $shipperaddress = null, ?Address $customeraddress = null, ?Address $receiveraddress = null, ?Contact $receiver_contact = null, ?string $pickup_remark = null, ?string $deliver_remark = null, ?AddressInfo $receiverinfo = null, ?ParcelDimension $dimension = null)
    {
        $this
            ->setShipperCenter($shipperCenter)
            ->setReceiverCenter($receiverCenter)
            ->setReceiverTourNumber($receiverTourNumber)
            ->setCustomer_centernumber($customer_centernumber)
            ->setCustomernumber($customernumber)
            ->setWeight($weight)
            ->setShipping_date($shipping_date)
            ->setReferencenumber($referencenumber)
            ->setReference2($reference2)
            ->setReference3($reference3)
            ->setReference4($reference4)
            ->setReferenceInternational($referenceInternational)
            ->setShipperaddress($shipperaddress)
            ->setCustomeraddress($customeraddress)
            ->setReceiveraddress($receiveraddress)
            ->setReceiver_contact($receiver_contact)
            ->setPickup_remark($pickup_remark)
            ->setDeliver_remark($deliver_remark)
            ->setReceiverinfo($receiverinfo)
            ->setDimension($dimension)
        ;
    }

    /**
     * Get shipperCenter value
     */
    public function getShipperCenter(): int
    {
        return $this->shipperCenter;
    }

    /**
     * Set shipperCenter value
     */
    public function setShipperCenter(int $shipperCenter): self
    {
        // validation for constraint: int
        if (null !== $shipperCenter && !(\is_int($shipperCenter) || ctype_digit($shipperCenter))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shipperCenter, true), \gettype($shipperCenter)), __LINE__);
        }
        $this->shipperCenter = $shipperCenter;

        return $this;
    }

    /**
     * Get receiverCenter value
     */
    public function getReceiverCenter(): int
    {
        return $this->receiverCenter;
    }

    /**
     * Set receiverCenter value
     */
    public function setReceiverCenter(int $receiverCenter): self
    {
        // validation for constraint: int
        if (null !== $receiverCenter && !(\is_int($receiverCenter) || ctype_digit($receiverCenter))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiverCenter, true), \gettype($receiverCenter)), __LINE__);
        }
        $this->receiverCenter = $receiverCenter;

        return $this;
    }

    /**
     * Get receiverTourNumber value
     */
    public function getReceiverTourNumber(): int
    {
        return $this->receiverTourNumber;
    }

    /**
     * Set receiverTourNumber value
     */
    public function setReceiverTourNumber(int $receiverTourNumber): self
    {
        // validation for constraint: int
        if (null !== $receiverTourNumber && !(\is_int($receiverTourNumber) || ctype_digit($receiverTourNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($receiverTourNumber, true), \gettype($receiverTourNumber)), __LINE__);
        }
        $this->receiverTourNumber = $receiverTourNumber;

        return $this;
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
     * Get weight value
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }

    /**
     * Set weight value
     */
    public function setWeight(?string $weight = null): self
    {
        // validation for constraint: string
        if (null !== $weight && !\is_string($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), \gettype($weight)), __LINE__);
        }
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get shipping_date value
     */
    public function getShipping_date(): ?string
    {
        return $this->shipping_date;
    }

    /**
     * Set shipping_date value
     */
    public function setShipping_date(?string $shipping_date = null): self
    {
        // validation for constraint: string
        if (null !== $shipping_date && !\is_string($shipping_date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipping_date, true), \gettype($shipping_date)), __LINE__);
        }
        $this->shipping_date = $shipping_date;

        return $this;
    }

    /**
     * Get referencenumber value
     */
    public function getReferencenumber(): ?string
    {
        return $this->referencenumber;
    }

    /**
     * Set referencenumber value
     */
    public function setReferencenumber(?string $referencenumber = null): self
    {
        // validation for constraint: string
        if (null !== $referencenumber && !\is_string($referencenumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencenumber, true), \gettype($referencenumber)), __LINE__);
        }
        $this->referencenumber = $referencenumber;

        return $this;
    }

    /**
     * Get reference2 value
     */
    public function getReference2(): ?string
    {
        return $this->reference2;
    }

    /**
     * Set reference2 value
     */
    public function setReference2(?string $reference2 = null): self
    {
        // validation for constraint: string
        if (null !== $reference2 && !\is_string($reference2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference2, true), \gettype($reference2)), __LINE__);
        }
        $this->reference2 = $reference2;

        return $this;
    }

    /**
     * Get reference3 value
     */
    public function getReference3(): ?string
    {
        return $this->reference3;
    }

    /**
     * Set reference3 value
     */
    public function setReference3(?string $reference3 = null): self
    {
        // validation for constraint: string
        if (null !== $reference3 && !\is_string($reference3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference3, true), \gettype($reference3)), __LINE__);
        }
        $this->reference3 = $reference3;

        return $this;
    }

    /**
     * Get reference4 value
     */
    public function getReference4(): ?string
    {
        return $this->reference4;
    }

    /**
     * Set reference4 value
     */
    public function setReference4(?string $reference4 = null): self
    {
        // validation for constraint: string
        if (null !== $reference4 && !\is_string($reference4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference4, true), \gettype($reference4)), __LINE__);
        }
        $this->reference4 = $reference4;

        return $this;
    }

    /**
     * Get referenceInternational value
     */
    public function getReferenceInternational(): ?string
    {
        return $this->referenceInternational;
    }

    /**
     * Set referenceInternational value
     */
    public function setReferenceInternational(?string $referenceInternational = null): self
    {
        // validation for constraint: string
        if (null !== $referenceInternational && !\is_string($referenceInternational)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceInternational, true), \gettype($referenceInternational)), __LINE__);
        }
        $this->referenceInternational = $referenceInternational;

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

    /**
     * Get receiver_contact value
     */
    public function getReceiver_contact(): ?Contact
    {
        return $this->receiver_contact;
    }

    /**
     * Set receiver_contact value
     */
    public function setReceiver_contact(?Contact $receiver_contact = null): self
    {
        $this->receiver_contact = $receiver_contact;

        return $this;
    }

    /**
     * Get pickup_remark value
     */
    public function getPickup_remark(): ?string
    {
        return $this->pickup_remark;
    }

    /**
     * Set pickup_remark value
     */
    public function setPickup_remark(?string $pickup_remark = null): self
    {
        // validation for constraint: string
        if (null !== $pickup_remark && !\is_string($pickup_remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pickup_remark, true), \gettype($pickup_remark)), __LINE__);
        }
        $this->pickup_remark = $pickup_remark;

        return $this;
    }

    /**
     * Get deliver_remark value
     */
    public function getDeliver_remark(): ?string
    {
        return $this->deliver_remark;
    }

    /**
     * Set deliver_remark value
     */
    public function setDeliver_remark(?string $deliver_remark = null): self
    {
        // validation for constraint: string
        if (null !== $deliver_remark && !\is_string($deliver_remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliver_remark, true), \gettype($deliver_remark)), __LINE__);
        }
        $this->deliver_remark = $deliver_remark;

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
     * Get Dimension value
     */
    public function getDimension(): ?ParcelDimension
    {
        return $this->Dimension;
    }

    /**
     * Set Dimension value
     */
    public function setDimension(?ParcelDimension $dimension = null): self
    {
        $this->Dimension = $dimension;

        return $this;
    }
}
