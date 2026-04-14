<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RdvData StructType
 */
#[\AllowDynamicProperties]
class RdvData extends AbstractStructBase
{
    /**
     * The DayCheckDone
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $DayCheckDone;

    /**
     * Constructor method for RdvData
     *
     * @uses RdvData::setDayCheckDone()
     */
    public function __construct(bool $dayCheckDone)
    {
        $this
            ->setDayCheckDone($dayCheckDone)
        ;
    }

    /**
     * Get DayCheckDone value
     */
    public function getDayCheckDone(): bool
    {
        return $this->DayCheckDone;
    }

    /**
     * Set DayCheckDone value
     */
    public function setDayCheckDone(bool $dayCheckDone): self
    {
        // validation for constraint: boolean
        if (null !== $dayCheckDone && !\is_bool($dayCheckDone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dayCheckDone, true), \gettype($dayCheckDone)), __LINE__);
        }
        $this->DayCheckDone = $dayCheckDone;

        return $this;
    }
}
