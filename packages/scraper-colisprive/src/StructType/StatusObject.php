<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatusObject StructType
 */
#[\AllowDynamicProperties]
class StatusObject extends AbstractStructBase
{
    /**
     * The StsDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $StsDate = null;
    /**
     * The StsCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $StsCode = null;
    /**
     * The StsDesc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $StsDesc = null;

    /**
     * Constructor method for StatusObject
     *
     * @uses StatusObject::setStsDate()
     * @uses StatusObject::setStsCode()
     * @uses StatusObject::setStsDesc()
     */
    public function __construct(?string $stsDate = null, ?string $stsCode = null, ?string $stsDesc = null)
    {
        $this
            ->setStsDate($stsDate)
            ->setStsCode($stsCode)
            ->setStsDesc($stsDesc)
        ;
    }

    /**
     * Get StsDate value
     */
    public function getStsDate(): ?string
    {
        return $this->StsDate;
    }

    /**
     * Set StsDate value
     */
    public function setStsDate(?string $stsDate = null): self
    {
        // validation for constraint: string
        if (null !== $stsDate && !\is_string($stsDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stsDate, true), \gettype($stsDate)), __LINE__);
        }
        $this->StsDate = $stsDate;

        return $this;
    }

    /**
     * Get StsCode value
     */
    public function getStsCode(): ?string
    {
        return $this->StsCode;
    }

    /**
     * Set StsCode value
     */
    public function setStsCode(?string $stsCode = null): self
    {
        // validation for constraint: string
        if (null !== $stsCode && !\is_string($stsCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stsCode, true), \gettype($stsCode)), __LINE__);
        }
        $this->StsCode = $stsCode;

        return $this;
    }

    /**
     * Get StsDesc value
     */
    public function getStsDesc(): ?string
    {
        return $this->StsDesc;
    }

    /**
     * Set StsDesc value
     */
    public function setStsDesc(?string $stsDesc = null): self
    {
        // validation for constraint: string
        if (null !== $stsDesc && !\is_string($stsDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stsDesc, true), \gettype($stsDesc)), __LINE__);
        }
        $this->StsDesc = $stsDesc;

        return $this;
    }
}
