<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DayRequestBase StructType
 */
#[\AllowDynamicProperties]
class DayRequestBase extends AbstractStructBase
{
    /**
     * The address
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?AddressMini $address = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $date = null;

    /**
     * Constructor method for DayRequestBase
     *
     * @uses DayRequestBase::setAddress()
     * @uses DayRequestBase::setDate()
     */
    public function __construct(?AddressMini $address = null, ?string $date = null)
    {
        $this
            ->setAddress($address)
            ->setDate($date)
        ;
    }

    /**
     * Get address value
     */
    public function getAddress(): ?AddressMini
    {
        return $this->address;
    }

    /**
     * Set address value
     */
    public function setAddress(?AddressMini $address = null): self
    {
        $this->address = $address;

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
}
