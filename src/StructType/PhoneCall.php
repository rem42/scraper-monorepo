<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PhoneCall StructType
 */
#[\AllowDynamicProperties]
class PhoneCall extends AbstractStructBase
{
    /**
     * The DurationSec
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $DurationSec;
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $Date;
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Number = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Type = null;

    /**
     * Constructor method for PhoneCall
     *
     * @uses PhoneCall::setDurationSec()
     * @uses PhoneCall::setDate()
     * @uses PhoneCall::setNumber()
     * @uses PhoneCall::setType()
     */
    public function __construct(int $durationSec, string $date, ?string $number = null, ?string $type = null)
    {
        $this
            ->setDurationSec($durationSec)
            ->setDate($date)
            ->setNumber($number)
            ->setType($type)
        ;
    }

    /**
     * Get DurationSec value
     */
    public function getDurationSec(): int
    {
        return $this->DurationSec;
    }

    /**
     * Set DurationSec value
     */
    public function setDurationSec(int $durationSec): self
    {
        // validation for constraint: int
        if (null !== $durationSec && !(\is_int($durationSec) || ctype_digit($durationSec))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($durationSec, true), \gettype($durationSec)), __LINE__);
        }
        $this->DurationSec = $durationSec;

        return $this;
    }

    /**
     * Get Date value
     */
    public function getDate(): string
    {
        return $this->Date;
    }

    /**
     * Set Date value
     */
    public function setDate(string $date): self
    {
        // validation for constraint: string
        if (null !== $date && !\is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), \gettype($date)), __LINE__);
        }
        $this->Date = $date;

        return $this;
    }

    /**
     * Get Number value
     */
    public function getNumber(): ?string
    {
        return $this->Number;
    }

    /**
     * Set Number value
     */
    public function setNumber(?string $number = null): self
    {
        // validation for constraint: string
        if (null !== $number && !\is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), \gettype($number)), __LINE__);
        }
        $this->Number = $number;

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
}
