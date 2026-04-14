<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryDateObject StructType
 */
#[\AllowDynamicProperties]
class DeliveryDateObject extends AbstractStructBase
{
    /**
     * The DlvrTimeF
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $DlvrTimeF;
    /**
     * The DlvrDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DlvrDate = null;

    /**
     * Constructor method for DeliveryDateObject
     *
     * @uses DeliveryDateObject::setDlvrTimeF()
     * @uses DeliveryDateObject::setDlvrDate()
     */
    public function __construct(string $dlvrTimeF, ?string $dlvrDate = null)
    {
        $this
            ->setDlvrTimeF($dlvrTimeF)
            ->setDlvrDate($dlvrDate)
        ;
    }

    /**
     * Get DlvrTimeF value
     */
    public function getDlvrTimeF(): string
    {
        return $this->DlvrTimeF;
    }

    /**
     * Set DlvrTimeF value
     *
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumDeliveryTimeFrame::valueIsValid()
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumDeliveryTimeFrame::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setDlvrTimeF(string $dlvrTimeF): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperColisPrive\EnumType\EnumDeliveryTimeFrame::valueIsValid($dlvrTimeF)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperColisPrive\EnumType\EnumDeliveryTimeFrame', \is_array($dlvrTimeF) ? implode(', ', $dlvrTimeF) : var_export($dlvrTimeF, true), implode(', ', \Scraper\ScraperColisPrive\EnumType\EnumDeliveryTimeFrame::getValidValues())), __LINE__);
        }
        $this->DlvrTimeF = $dlvrTimeF;

        return $this;
    }

    /**
     * Get DlvrDate value
     */
    public function getDlvrDate(): ?string
    {
        return $this->DlvrDate;
    }

    /**
     * Set DlvrDate value
     */
    public function setDlvrDate(?string $dlvrDate = null): self
    {
        // validation for constraint: string
        if (null !== $dlvrDate && !\is_string($dlvrDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrDate, true), \gettype($dlvrDate)), __LINE__);
        }
        $this->DlvrDate = $dlvrDate;

        return $this;
    }
}
