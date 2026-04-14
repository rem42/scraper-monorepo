<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceNoticeEntry StructType
 */
#[\AllowDynamicProperties]
class ServiceNoticeEntry extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $Type;
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
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $Customer = null;
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfReason $Reason = null;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Date = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Status = null;
    /**
     * The Weight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Weight = null;
    /**
     * The Info
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Info = null;
    /**
     * The Counterquestion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Counterquestion = null;

    /**
     * Constructor method for ServiceNoticeEntry
     *
     * @uses ServiceNoticeEntry::setType()
     * @uses ServiceNoticeEntry::setBarcodeId()
     * @uses ServiceNoticeEntry::setBarcodeSource()
     * @uses ServiceNoticeEntry::setCustomer()
     * @uses ServiceNoticeEntry::setReason()
     * @uses ServiceNoticeEntry::setDate()
     * @uses ServiceNoticeEntry::setStatus()
     * @uses ServiceNoticeEntry::setWeight()
     * @uses ServiceNoticeEntry::setInfo()
     * @uses ServiceNoticeEntry::setCounterquestion()
     */
    public function __construct(string $type, ?string $barcodeId = null, ?string $barcodeSource = null, ?Customer $customer = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfReason $reason = null, ?string $date = null, ?string $status = null, ?string $weight = null, ?string $info = null, ?string $counterquestion = null)
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
     * Get Type value
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Set Type value
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
        $this->Type = $type;

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
     * Get Customer value
     */
    public function getCustomer(): ?Customer
    {
        return $this->Customer;
    }

    /**
     * Set Customer value
     */
    public function setCustomer(?Customer $customer = null): self
    {
        $this->Customer = $customer;

        return $this;
    }

    /**
     * Get Reason value
     */
    public function getReason(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfReason
    {
        return $this->Reason;
    }

    /**
     * Set Reason value
     */
    public function setReason(?\Scraper\ScraperDPD\ArrayType\ArrayOfReason $reason = null): self
    {
        $this->Reason = $reason;

        return $this;
    }

    /**
     * Get Date value
     */
    public function getDate(): ?string
    {
        return $this->Date;
    }

    /**
     * Set Date value
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (null !== $date && !\is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), \gettype($date)), __LINE__);
        }
        $this->Date = $date;

        return $this;
    }

    /**
     * Get Status value
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }

    /**
     * Set Status value
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (null !== $status && !\is_string($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), \gettype($status)), __LINE__);
        }
        $this->Status = $status;

        return $this;
    }

    /**
     * Get Weight value
     */
    public function getWeight(): ?string
    {
        return $this->Weight;
    }

    /**
     * Set Weight value
     */
    public function setWeight(?string $weight = null): self
    {
        // validation for constraint: string
        if (null !== $weight && !\is_string($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), \gettype($weight)), __LINE__);
        }
        $this->Weight = $weight;

        return $this;
    }

    /**
     * Get Info value
     */
    public function getInfo(): ?string
    {
        return $this->Info;
    }

    /**
     * Set Info value
     */
    public function setInfo(?string $info = null): self
    {
        // validation for constraint: string
        if (null !== $info && !\is_string($info)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($info, true), \gettype($info)), __LINE__);
        }
        $this->Info = $info;

        return $this;
    }

    /**
     * Get Counterquestion value
     */
    public function getCounterquestion(): ?string
    {
        return $this->Counterquestion;
    }

    /**
     * Set Counterquestion value
     */
    public function setCounterquestion(?string $counterquestion = null): self
    {
        // validation for constraint: string
        if (null !== $counterquestion && !\is_string($counterquestion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($counterquestion, true), \gettype($counterquestion)), __LINE__);
        }
        $this->Counterquestion = $counterquestion;

        return $this;
    }
}
