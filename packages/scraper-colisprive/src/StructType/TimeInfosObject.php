<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeInfosObject StructType
 */
#[\AllowDynamicProperties]
class TimeInfosObject extends AbstractStructBase
{
    /**
     * The weekday
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $weekday = null;
    /**
     * The timefrom1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $timefrom1 = null;
    /**
     * The timeto1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $timeto1 = null;
    /**
     * The timefrom2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $timefrom2 = null;
    /**
     * The timeto2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $timeto2 = null;

    /**
     * Constructor method for TimeInfosObject
     *
     * @uses TimeInfosObject::setWeekday()
     * @uses TimeInfosObject::setTimefrom1()
     * @uses TimeInfosObject::setTimeto1()
     * @uses TimeInfosObject::setTimefrom2()
     * @uses TimeInfosObject::setTimeto2()
     */
    public function __construct(?string $weekday = null, ?string $timefrom1 = null, ?string $timeto1 = null, ?string $timefrom2 = null, ?string $timeto2 = null)
    {
        $this
            ->setWeekday($weekday)
            ->setTimefrom1($timefrom1)
            ->setTimeto1($timeto1)
            ->setTimefrom2($timefrom2)
            ->setTimeto2($timeto2)
        ;
    }

    /**
     * Get weekday value
     */
    public function getWeekday(): ?string
    {
        return $this->weekday;
    }

    /**
     * Set weekday value
     */
    public function setWeekday(?string $weekday = null): self
    {
        // validation for constraint: string
        if (null !== $weekday && !\is_string($weekday)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weekday, true), \gettype($weekday)), __LINE__);
        }
        $this->weekday = $weekday;

        return $this;
    }

    /**
     * Get timefrom1 value
     */
    public function getTimefrom1(): ?string
    {
        return $this->timefrom1;
    }

    /**
     * Set timefrom1 value
     */
    public function setTimefrom1(?string $timefrom1 = null): self
    {
        // validation for constraint: string
        if (null !== $timefrom1 && !\is_string($timefrom1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timefrom1, true), \gettype($timefrom1)), __LINE__);
        }
        $this->timefrom1 = $timefrom1;

        return $this;
    }

    /**
     * Get timeto1 value
     */
    public function getTimeto1(): ?string
    {
        return $this->timeto1;
    }

    /**
     * Set timeto1 value
     */
    public function setTimeto1(?string $timeto1 = null): self
    {
        // validation for constraint: string
        if (null !== $timeto1 && !\is_string($timeto1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeto1, true), \gettype($timeto1)), __LINE__);
        }
        $this->timeto1 = $timeto1;

        return $this;
    }

    /**
     * Get timefrom2 value
     */
    public function getTimefrom2(): ?string
    {
        return $this->timefrom2;
    }

    /**
     * Set timefrom2 value
     */
    public function setTimefrom2(?string $timefrom2 = null): self
    {
        // validation for constraint: string
        if (null !== $timefrom2 && !\is_string($timefrom2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timefrom2, true), \gettype($timefrom2)), __LINE__);
        }
        $this->timefrom2 = $timefrom2;

        return $this;
    }

    /**
     * Get timeto2 value
     */
    public function getTimeto2(): ?string
    {
        return $this->timeto2;
    }

    /**
     * Set timeto2 value
     */
    public function setTimeto2(?string $timeto2 = null): self
    {
        // validation for constraint: string
        if (null !== $timeto2 && !\is_string($timeto2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeto2, true), \gettype($timeto2)), __LINE__);
        }
        $this->timeto2 = $timeto2;

        return $this;
    }
}
