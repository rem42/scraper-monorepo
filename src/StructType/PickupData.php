<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for PickupData StructType
 */
#[\AllowDynamicProperties]
class PickupData extends ServiceBaseList
{
    /**
     * The time_from
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $time_from = null;
    /**
     * The time_to
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $time_to = null;
    /**
     * The remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $remark = null;
    /**
     * The pick_remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $pick_remark = null;
    /**
     * The dayCheckDone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?bool $dayCheckDone;

    /**
     * Constructor method for PickupData
     *
     * @uses PickupData::setTime_from()
     * @uses PickupData::setTime_to()
     * @uses PickupData::setRemark()
     * @uses PickupData::setPick_remark()
     * @uses PickupData::setDayCheckDone()
     */
    public function __construct(?string $time_from = null, ?string $time_to = null, ?string $remark = null, ?string $pick_remark = null, ?bool $dayCheckDone)
    {
        $this
            ->setTime_from($time_from)
            ->setTime_to($time_to)
            ->setRemark($remark)
            ->setPick_remark($pick_remark)
            ->setDayCheckDone($dayCheckDone)
        ;
    }

    /**
     * Get time_from value
     */
    public function getTime_from(): ?string
    {
        return $this->time_from;
    }

    /**
     * Set time_from value
     */
    public function setTime_from(?string $time_from = null): self
    {
        // validation for constraint: string
        if (null !== $time_from && !\is_string($time_from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time_from, true), \gettype($time_from)), __LINE__);
        }
        $this->time_from = $time_from;

        return $this;
    }

    /**
     * Get time_to value
     */
    public function getTime_to(): ?string
    {
        return $this->time_to;
    }

    /**
     * Set time_to value
     */
    public function setTime_to(?string $time_to = null): self
    {
        // validation for constraint: string
        if (null !== $time_to && !\is_string($time_to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($time_to, true), \gettype($time_to)), __LINE__);
        }
        $this->time_to = $time_to;

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
     * Get pick_remark value
     */
    public function getPick_remark(): ?string
    {
        return $this->pick_remark;
    }

    /**
     * Set pick_remark value
     */
    public function setPick_remark(?string $pick_remark = null): self
    {
        // validation for constraint: string
        if (null !== $pick_remark && !\is_string($pick_remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pick_remark, true), \gettype($pick_remark)), __LINE__);
        }
        $this->pick_remark = $pick_remark;

        return $this;
    }

    /**
     * Get dayCheckDone value
     */
    public function getDayCheckDone(): bool
    {
        return $this->dayCheckDone;
    }

    /**
     * Set dayCheckDone value
     */
    public function setDayCheckDone(?bool $dayCheckDone): self
    {
        // validation for constraint: boolean
        if (null !== $dayCheckDone && !\is_bool($dayCheckDone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dayCheckDone, true), \gettype($dayCheckDone)), __LINE__);
        }
        $this->dayCheckDone = $dayCheckDone;

        return $this;
    }
}
