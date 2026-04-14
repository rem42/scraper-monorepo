<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetContainerRequest StructType
 */
#[\AllowDynamicProperties]
class SetContainerRequest extends AbstractStructBase
{
    /**
     * The LabelFormat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $LabelFormat;
    /**
     * The SubAcc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $SubAcc = null;
    /**
     * The SecurityID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?IdentificationObject $SecurityID;

    /**
     * Constructor method for SetContainerRequest
     *
     * @uses SetContainerRequest::setLabelFormat()
     * @uses SetContainerRequest::setSubAcc()
     * @uses SetContainerRequest::setSecurityID()
     */
    public function __construct(string $labelFormat, ?string $subAcc = null, ?IdentificationObject $securityID)
    {
        $this
            ->setLabelFormat($labelFormat)
            ->setSubAcc($subAcc)
            ->setSecurityID($securityID)
        ;
    }

    /**
     * Get LabelFormat value
     */
    public function getLabelFormat(): string
    {
        return $this->LabelFormat;
    }

    /**
     * Set LabelFormat value
     *
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumLabelFormat::valueIsValid()
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumLabelFormat::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setLabelFormat(string $labelFormat): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperColisPrive\EnumType\EnumLabelFormat::valueIsValid($labelFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperColisPrive\EnumType\EnumLabelFormat', \is_array($labelFormat) ? implode(', ', $labelFormat) : var_export($labelFormat, true), implode(', ', \Scraper\ScraperColisPrive\EnumType\EnumLabelFormat::getValidValues())), __LINE__);
        }
        $this->LabelFormat = $labelFormat;

        return $this;
    }

    /**
     * Get SubAcc value
     */
    public function getSubAcc(): ?string
    {
        return $this->SubAcc;
    }

    /**
     * Set SubAcc value
     */
    public function setSubAcc(?string $subAcc = null): self
    {
        // validation for constraint: string
        if (null !== $subAcc && !\is_string($subAcc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subAcc, true), \gettype($subAcc)), __LINE__);
        }
        $this->SubAcc = $subAcc;

        return $this;
    }

    /**
     * Get SecurityID value
     */
    public function getSecurityID(): IdentificationObject
    {
        return $this->SecurityID;
    }

    /**
     * Set SecurityID value
     */
    public function setSecurityID(?IdentificationObject $securityID): self
    {
        $this->SecurityID = $securityID;

        return $this;
    }
}
