<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelParcelRequest StructType
 */
#[\AllowDynamicProperties]
class CancelParcelRequest extends AbstractStructBase
{
    /**
     * The SecurityID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?IdentificationObject $SecurityID;
    /**
     * The CPPclCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $CPPclCode;
    /**
     * The CsgZipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $CsgZipCode;

    /**
     * Constructor method for CancelParcelRequest
     *
     * @uses CancelParcelRequest::setSecurityID()
     * @uses CancelParcelRequest::setCPPclCode()
     * @uses CancelParcelRequest::setCsgZipCode()
     */
    public function __construct(?IdentificationObject $securityID, ?string $cPPclCode, ?string $csgZipCode)
    {
        $this
            ->setSecurityID($securityID)
            ->setCPPclCode($cPPclCode)
            ->setCsgZipCode($csgZipCode)
        ;
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

    /**
     * Get CPPclCode value
     */
    public function getCPPclCode(): string
    {
        return $this->CPPclCode;
    }

    /**
     * Set CPPclCode value
     */
    public function setCPPclCode(?string $cPPclCode): self
    {
        // validation for constraint: string
        if (null !== $cPPclCode && !\is_string($cPPclCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPPclCode, true), \gettype($cPPclCode)), __LINE__);
        }
        $this->CPPclCode = $cPPclCode;

        return $this;
    }

    /**
     * Get CsgZipCode value
     */
    public function getCsgZipCode(): string
    {
        return $this->CsgZipCode;
    }

    /**
     * Set CsgZipCode value
     */
    public function setCsgZipCode(?string $csgZipCode): self
    {
        // validation for constraint: string
        if (null !== $csgZipCode && !\is_string($csgZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($csgZipCode, true), \gettype($csgZipCode)), __LINE__);
        }
        $this->CsgZipCode = $csgZipCode;

        return $this;
    }
}
