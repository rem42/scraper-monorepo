<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for RdvDeliveryInfo StructType
 */
#[\AllowDynamicProperties]
class RdvDeliveryInfo extends RdvDeliveryInfoSmall
{
    /**
     * The Date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Date = null;
    /**
     * The TimeFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TimeFrom = null;
    /**
     * The TimeTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TimeTo = null;

    /**
     * Constructor method for RdvDeliveryInfo
     *
     * @uses RdvDeliveryInfo::setDate()
     * @uses RdvDeliveryInfo::setTimeFrom()
     * @uses RdvDeliveryInfo::setTimeTo()
     */
    public function __construct(?string $date = null, ?string $timeFrom = null, ?string $timeTo = null)
    {
        $this
            ->setDate($date)
            ->setTimeFrom($timeFrom)
            ->setTimeTo($timeTo)
        ;
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
     * Get TimeFrom value
     */
    public function getTimeFrom(): ?string
    {
        return $this->TimeFrom;
    }

    /**
     * Set TimeFrom value
     */
    public function setTimeFrom(?string $timeFrom = null): self
    {
        // validation for constraint: string
        if (null !== $timeFrom && !\is_string($timeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeFrom, true), \gettype($timeFrom)), __LINE__);
        }
        $this->TimeFrom = $timeFrom;

        return $this;
    }

    /**
     * Get TimeTo value
     */
    public function getTimeTo(): ?string
    {
        return $this->TimeTo;
    }

    /**
     * Set TimeTo value
     */
    public function setTimeTo(?string $timeTo = null): self
    {
        // validation for constraint: string
        if (null !== $timeTo && !\is_string($timeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeTo, true), \gettype($timeTo)), __LINE__);
        }
        $this->TimeTo = $timeTo;

        return $this;
    }
}
