<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceNotice StructType
 */
#[\AllowDynamicProperties]
class ServiceNotice extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $type;
    /**
     * The BarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $BarcodeId = null;
    /**
     * The BarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $BarcodeSource = null;
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $customer = null;
    /**
     * The reason
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $reason = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $date = null;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $status = null;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $weight = null;
    /**
     * The info
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $info = null;
    /**
     * The counterquestion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $counterquestion = null;

    /**
     * Constructor method for ServiceNotice
     *
     * @uses ServiceNotice::setType()
     * @uses ServiceNotice::setBarcodeId()
     * @uses ServiceNotice::setBarcodeSource()
     * @uses ServiceNotice::setCustomer()
     * @uses ServiceNotice::setReason()
     * @uses ServiceNotice::setDate()
     * @uses ServiceNotice::setStatus()
     * @uses ServiceNotice::setWeight()
     * @uses ServiceNotice::setInfo()
     * @uses ServiceNotice::setCounterquestion()
     */
    public function __construct(string $type, ?string $barcodeId = null, ?string $barcodeSource = null, ?Customer $customer = null, ?string $reason = null, ?string $date = null, ?string $status = null, ?string $weight = null, ?string $info = null, ?string $counterquestion = null)
    {
        $this
            ->setType($type)
            ->setBarcodeId($barcodeId)
            ->setBarcodeSource($barcodeSource)
            ->setCustomer($customer)
            ->setReason($reason)
            ->setDate($date)
            ->setStatus($status)
            ->setWeight($weight)
            ->setInfo($info)
            ->setCounterquestion($counterquestion)
        ;
    }

    /**
     * Get type value
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set type value
     *
     * @uses \Scraper\ScraperDPD\EnumType\ServiceNoticeType::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\ServiceNoticeType::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\ServiceNoticeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\ServiceNoticeType', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\ServiceNoticeType::getValidValues())), __LINE__);
        }
        $this->type = $type;

        return $this;
    }

    /**
     * Get BarcodeId value
     */
    public function getBarcodeId(): ?string
    {
        return $this->BarcodeId;
    }

    /**
     * Set BarcodeId value
     */
    public function setBarcodeId(?string $barcodeId = null): self
    {
        // validation for constraint: string
        if (null !== $barcodeId && !\is_string($barcodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeId, true), \gettype($barcodeId)), __LINE__);
        }
        $this->BarcodeId = $barcodeId;

        return $this;
    }

    /**
     * Get BarcodeSource value
     */
    public function getBarcodeSource(): ?string
    {
        return $this->BarcodeSource;
    }

    /**
     * Set BarcodeSource value
     */
    public function setBarcodeSource(?string $barcodeSource = null): self
    {
        // validation for constraint: string
        if (null !== $barcodeSource && !\is_string($barcodeSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeSource, true), \gettype($barcodeSource)), __LINE__);
        }
        $this->BarcodeSource = $barcodeSource;

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
     * Get reason value
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * Set reason value
     */
    public function setReason(?string $reason = null): self
    {
        // validation for constraint: string
        if (null !== $reason && !\is_string($reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), \gettype($reason)), __LINE__);
        }
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get date value
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Set date value
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (null !== $date && !\is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), \gettype($date)), __LINE__);
        }
        $this->date = $date;

        return $this;
    }

    /**
     * Get status value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Set status value
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (null !== $status && !\is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), \gettype($status)), __LINE__);
        }
        $this->status = $status;

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
     * Get info value
     */
    public function getInfo(): ?string
    {
        return $this->info;
    }

    /**
     * Set info value
     */
    public function setInfo(?string $info = null): self
    {
        // validation for constraint: string
        if (null !== $info && !\is_string($info)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($info, true), \gettype($info)), __LINE__);
        }
        $this->info = $info;

        return $this;
    }

    /**
     * Get counterquestion value
     */
    public function getCounterquestion(): ?string
    {
        return $this->counterquestion;
    }

    /**
     * Set counterquestion value
     */
    public function setCounterquestion(?string $counterquestion = null): self
    {
        // validation for constraint: string
        if (null !== $counterquestion && !\is_string($counterquestion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($counterquestion, true), \gettype($counterquestion)), __LINE__);
        }
        $this->counterquestion = $counterquestion;

        return $this;
    }
}
