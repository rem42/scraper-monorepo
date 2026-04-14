<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CollectionRequestRequestBase StructType
 */
#[\AllowDynamicProperties]
abstract class CollectionRequestRequestBase extends AbstractStructBase
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
     * The parcel_count
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $parcel_count;
    /**
     * The receiveraddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Address $receiveraddress = null;
    /**
     * The shipperaddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Address $shipperaddress = null;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $remark = null;
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
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?CollectionRequestServices $services = null;

    /**
     * Constructor method for CollectionRequestRequestBase
     *
     * @uses CollectionRequestRequestBase::setCustomer_countrycode()
     * @uses CollectionRequestRequestBase::setCustomer_centernumber()
     * @uses CollectionRequestRequestBase::setCustomer_number()
     * @uses CollectionRequestRequestBase::setParcel_count()
     * @uses CollectionRequestRequestBase::setReceiveraddress()
     * @uses CollectionRequestRequestBase::setShipperaddress()
     * @uses CollectionRequestRequestBase::setRemark()
     * @uses CollectionRequestRequestBase::setReferencenumber()
     * @uses CollectionRequestRequestBase::setReference2()
     * @uses CollectionRequestRequestBase::setReference3()
     * @uses CollectionRequestRequestBase::setReference4()
     * @uses CollectionRequestRequestBase::setServices()
     */
    public function __construct(int $customer_countrycode, int $customer_centernumber, int $customer_number, int $parcel_count, ?Address $receiveraddress = null, ?Address $shipperaddress = null, ?string $remark = null, ?string $referencenumber = null, ?string $reference2 = null, ?string $reference3 = null, ?string $reference4 = null, ?CollectionRequestServices $services = null)
    {
        $this
            ->setCustomer_countrycode($customer_countrycode)
            ->setCustomer_centernumber($customer_centernumber)
            ->setCustomer_number($customer_number)
            ->setParcel_count($parcel_count)
            ->setReceiveraddress($receiveraddress)
            ->setShipperaddress($shipperaddress)
            ->setRemark($remark)
            ->setReferencenumber($referencenumber)
            ->setReference2($reference2)
            ->setReference3($reference3)
            ->setReference4($reference4)
            ->setServices($services)
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
     * Get parcel_count value
     */
    public function getParcel_count(): int
    {
        return $this->parcel_count;
    }

    /**
     * Set parcel_count value
     */
    public function setParcel_count(int $parcel_count): self
    {
        // validation for constraint: int
        if (null !== $parcel_count && !(\is_int($parcel_count) || ctype_digit($parcel_count))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parcel_count, true), \gettype($parcel_count)), __LINE__);
        }
        $this->parcel_count = $parcel_count;

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
     * Get remark value
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * Set remark value
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (null !== $remark && !\is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), \gettype($remark)), __LINE__);
        }
        $this->remark = $remark;

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
     * Get services value
     */
    public function getServices(): ?CollectionRequestServices
    {
        return $this->services;
    }

    /**
     * Set services value
     */
    public function setServices(?CollectionRequestServices $services = null): self
    {
        $this->services = $services;

        return $this;
    }
}
