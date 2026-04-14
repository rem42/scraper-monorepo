<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Task StructType
 */
#[\AllowDynamicProperties]
class Task extends AbstractStructBase
{
    /**
     * The NotProcessed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $NotProcessed;
    /**
     * The Finished
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $Finished;
    /**
     * The CreatedAt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $CreatedAt;
    /**
     * The OnPositionAt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $OnPositionAt;
    /**
     * The FinishedAt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $FinishedAt;
    /**
     * The VisitCounter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $VisitCounter;
    /**
     * The TaskId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $TaskId;
    /**
     * The IsB2C
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $IsB2C;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Type = null;
    /**
     * The Parcels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfCNOTParcel $Parcels = null;
    /**
     * The ContactName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ContactName = null;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Location $Location = null;
    /**
     * The Rendezvous
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Rendezvous $Rendezvous = null;
    /**
     * The PhoneCalls
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfPhoneCall $PhoneCalls = null;

    /**
     * Constructor method for Task
     *
     * @uses Task::setNotProcessed()
     * @uses Task::setFinished()
     * @uses Task::setCreatedAt()
     * @uses Task::setOnPositionAt()
     * @uses Task::setFinishedAt()
     * @uses Task::setVisitCounter()
     * @uses Task::setTaskId()
     * @uses Task::setIsB2C()
     * @uses Task::setType()
     * @uses Task::setParcels()
     * @uses Task::setContactName()
     * @uses Task::setLocation()
     * @uses Task::setRendezvous()
     * @uses Task::setPhoneCalls()
     */
    public function __construct(bool $notProcessed, bool $finished, string $createdAt, string $onPositionAt, string $finishedAt, int $visitCounter, int $taskId, bool $isB2C, ?string $type = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfCNOTParcel $parcels = null, ?string $contactName = null, ?Location $location = null, ?Rendezvous $rendezvous = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfPhoneCall $phoneCalls = null)
    {
        $this
            ->setNotProcessed($notProcessed)
            ->setFinished($finished)
            ->setCreatedAt($createdAt)
            ->setOnPositionAt($onPositionAt)
            ->setFinishedAt($finishedAt)
            ->setVisitCounter($visitCounter)
            ->setTaskId($taskId)
            ->setIsB2C($isB2C)
            ->setType($type)
            ->setParcels($parcels)
            ->setContactName($contactName)
            ->setLocation($location)
            ->setRendezvous($rendezvous)
            ->setPhoneCalls($phoneCalls)
        ;
    }

    /**
     * Get NotProcessed value
     */
    public function getNotProcessed(): bool
    {
        return $this->NotProcessed;
    }

    /**
     * Set NotProcessed value
     */
    public function setNotProcessed(bool $notProcessed): self
    {
        // validation for constraint: boolean
        if (null !== $notProcessed && !\is_bool($notProcessed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notProcessed, true), \gettype($notProcessed)), __LINE__);
        }
        $this->NotProcessed = $notProcessed;

        return $this;
    }

    /**
     * Get Finished value
     */
    public function getFinished(): bool
    {
        return $this->Finished;
    }

    /**
     * Set Finished value
     */
    public function setFinished(bool $finished): self
    {
        // validation for constraint: boolean
        if (null !== $finished && !\is_bool($finished)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($finished, true), \gettype($finished)), __LINE__);
        }
        $this->Finished = $finished;

        return $this;
    }

    /**
     * Get CreatedAt value
     */
    public function getCreatedAt(): string
    {
        return $this->CreatedAt;
    }

    /**
     * Set CreatedAt value
     */
    public function setCreatedAt(string $createdAt): self
    {
        // validation for constraint: string
        if (null !== $createdAt && !\is_string($createdAt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createdAt, true), \gettype($createdAt)), __LINE__);
        }
        $this->CreatedAt = $createdAt;

        return $this;
    }

    /**
     * Get OnPositionAt value
     */
    public function getOnPositionAt(): string
    {
        return $this->OnPositionAt;
    }

    /**
     * Set OnPositionAt value
     */
    public function setOnPositionAt(string $onPositionAt): self
    {
        // validation for constraint: string
        if (null !== $onPositionAt && !\is_string($onPositionAt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($onPositionAt, true), \gettype($onPositionAt)), __LINE__);
        }
        $this->OnPositionAt = $onPositionAt;

        return $this;
    }

    /**
     * Get FinishedAt value
     */
    public function getFinishedAt(): string
    {
        return $this->FinishedAt;
    }

    /**
     * Set FinishedAt value
     */
    public function setFinishedAt(string $finishedAt): self
    {
        // validation for constraint: string
        if (null !== $finishedAt && !\is_string($finishedAt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($finishedAt, true), \gettype($finishedAt)), __LINE__);
        }
        $this->FinishedAt = $finishedAt;

        return $this;
    }

    /**
     * Get VisitCounter value
     */
    public function getVisitCounter(): int
    {
        return $this->VisitCounter;
    }

    /**
     * Set VisitCounter value
     */
    public function setVisitCounter(int $visitCounter): self
    {
        // validation for constraint: int
        if (null !== $visitCounter && !(\is_int($visitCounter) || ctype_digit($visitCounter))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($visitCounter, true), \gettype($visitCounter)), __LINE__);
        }
        $this->VisitCounter = $visitCounter;

        return $this;
    }

    /**
     * Get TaskId value
     */
    public function getTaskId(): int
    {
        return $this->TaskId;
    }

    /**
     * Set TaskId value
     */
    public function setTaskId(int $taskId): self
    {
        // validation for constraint: int
        if (null !== $taskId && !(\is_int($taskId) || ctype_digit($taskId))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($taskId, true), \gettype($taskId)), __LINE__);
        }
        $this->TaskId = $taskId;

        return $this;
    }

    /**
     * Get IsB2C value
     */
    public function getIsB2C(): bool
    {
        return $this->IsB2C;
    }

    /**
     * Set IsB2C value
     */
    public function setIsB2C(bool $isB2C): self
    {
        // validation for constraint: boolean
        if (null !== $isB2C && !\is_bool($isB2C)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isB2C, true), \gettype($isB2C)), __LINE__);
        }
        $this->IsB2C = $isB2C;

        return $this;
    }

    /**
     * Get Type value
     */
    public function getType(): ?string
    {
        return $this->Type;
    }

    /**
     * Set Type value
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (null !== $type && !\is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), \gettype($type)), __LINE__);
        }
        $this->Type = $type;

        return $this;
    }

    /**
     * Get Parcels value
     */
    public function getParcels(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfCNOTParcel
    {
        return $this->Parcels;
    }

    /**
     * Set Parcels value
     */
    public function setParcels(?\Scraper\ScraperDPD\ArrayType\ArrayOfCNOTParcel $parcels = null): self
    {
        $this->Parcels = $parcels;

        return $this;
    }

    /**
     * Get ContactName value
     */
    public function getContactName(): ?string
    {
        return $this->ContactName;
    }

    /**
     * Set ContactName value
     */
    public function setContactName(?string $contactName = null): self
    {
        // validation for constraint: string
        if (null !== $contactName && !\is_string($contactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactName, true), \gettype($contactName)), __LINE__);
        }
        $this->ContactName = $contactName;

        return $this;
    }

    /**
     * Get Location value
     */
    public function getLocation(): ?Location
    {
        return $this->Location;
    }

    /**
     * Set Location value
     */
    public function setLocation(?Location $location = null): self
    {
        $this->Location = $location;

        return $this;
    }

    /**
     * Get Rendezvous value
     */
    public function getRendezvous(): ?Rendezvous
    {
        return $this->Rendezvous;
    }

    /**
     * Set Rendezvous value
     */
    public function setRendezvous(?Rendezvous $rendezvous = null): self
    {
        $this->Rendezvous = $rendezvous;

        return $this;
    }

    /**
     * Get PhoneCalls value
     */
    public function getPhoneCalls(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfPhoneCall
    {
        return $this->PhoneCalls;
    }

    /**
     * Set PhoneCalls value
     */
    public function setPhoneCalls(?\Scraper\ScraperDPD\ArrayType\ArrayOfPhoneCall $phoneCalls = null): self
    {
        $this->PhoneCalls = $phoneCalls;

        return $this;
    }
}
