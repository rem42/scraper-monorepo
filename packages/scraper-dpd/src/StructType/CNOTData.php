<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CNOTData StructType
 */
#[\AllowDynamicProperties]
class CNOTData extends AbstractStructBase
{
    /**
     * The Depot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $Depot;
    /**
     * The TimeStamp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $TimeStamp;
    /**
     * The HardwareId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $HardwareId = null;
    /**
     * The TourNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TourNumber = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Status = null;
    /**
     * The Tasks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfTask $Tasks = null;
    /**
     * The Locations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfLocation $Locations = null;
    /**
     * The PhoneCalls
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfPhoneCall $PhoneCalls = null;

    /**
     * Constructor method for CNOTData
     *
     * @uses CNOTData::setDepot()
     * @uses CNOTData::setTimeStamp()
     * @uses CNOTData::setHardwareId()
     * @uses CNOTData::setTourNumber()
     * @uses CNOTData::setStatus()
     * @uses CNOTData::setTasks()
     * @uses CNOTData::setLocations()
     * @uses CNOTData::setPhoneCalls()
     */
    public function __construct(int $depot, string $timeStamp, ?string $hardwareId = null, ?string $tourNumber = null, ?string $status = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfTask $tasks = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfLocation $locations = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfPhoneCall $phoneCalls = null)
    {
        $this
            ->setDepot($depot)
            ->setTimeStamp($timeStamp)
            ->setHardwareId($hardwareId)
            ->setTourNumber($tourNumber)
            ->setStatus($status)
            ->setTasks($tasks)
            ->setLocations($locations)
            ->setPhoneCalls($phoneCalls)
        ;
    }

    /**
     * Get Depot value
     */
    public function getDepot(): int
    {
        return $this->Depot;
    }

    /**
     * Set Depot value
     */
    public function setDepot(int $depot): self
    {
        // validation for constraint: int
        if (null !== $depot && !(\is_int($depot) || ctype_digit($depot))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($depot, true), \gettype($depot)), __LINE__);
        }
        $this->Depot = $depot;

        return $this;
    }

    /**
     * Get TimeStamp value
     */
    public function getTimeStamp(): string
    {
        return $this->TimeStamp;
    }

    /**
     * Set TimeStamp value
     */
    public function setTimeStamp(string $timeStamp): self
    {
        // validation for constraint: string
        if (null !== $timeStamp && !\is_string($timeStamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeStamp, true), \gettype($timeStamp)), __LINE__);
        }
        $this->TimeStamp = $timeStamp;

        return $this;
    }

    /**
     * Get HardwareId value
     */
    public function getHardwareId(): ?string
    {
        return $this->HardwareId;
    }

    /**
     * Set HardwareId value
     */
    public function setHardwareId(?string $hardwareId = null): self
    {
        // validation for constraint: string
        if (null !== $hardwareId && !\is_string($hardwareId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hardwareId, true), \gettype($hardwareId)), __LINE__);
        }
        $this->HardwareId = $hardwareId;

        return $this;
    }

    /**
     * Get TourNumber value
     */
    public function getTourNumber(): ?string
    {
        return $this->TourNumber;
    }

    /**
     * Set TourNumber value
     */
    public function setTourNumber(?string $tourNumber = null): self
    {
        // validation for constraint: string
        if (null !== $tourNumber && !\is_string($tourNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tourNumber, true), \gettype($tourNumber)), __LINE__);
        }
        $this->TourNumber = $tourNumber;

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
     * Get Tasks value
     */
    public function getTasks(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfTask
    {
        return $this->Tasks;
    }

    /**
     * Set Tasks value
     */
    public function setTasks(?\Scraper\ScraperDPD\ArrayType\ArrayOfTask $tasks = null): self
    {
        $this->Tasks = $tasks;

        return $this;
    }

    /**
     * Get Locations value
     */
    public function getLocations(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfLocation
    {
        return $this->Locations;
    }

    /**
     * Set Locations value
     */
    public function setLocations(?\Scraper\ScraperDPD\ArrayType\ArrayOfLocation $locations = null): self
    {
        $this->Locations = $locations;

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
