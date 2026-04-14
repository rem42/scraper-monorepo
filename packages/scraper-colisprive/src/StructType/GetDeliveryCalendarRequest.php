<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDeliveryCalendarRequest StructType
 */
#[\AllowDynamicProperties]
class GetDeliveryCalendarRequest extends AbstractStructBase
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
     * The DlvrZC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $DlvrZC;

    /**
     * Constructor method for GetDeliveryCalendarRequest
     *
     * @uses GetDeliveryCalendarRequest::setSecurityID()
     * @uses GetDeliveryCalendarRequest::setCPPclCode()
     * @uses GetDeliveryCalendarRequest::setDlvrZC()
     */
    public function __construct(?IdentificationObject $securityID, ?string $cPPclCode, ?string $dlvrZC)
    {
        $this
            ->setSecurityID($securityID)
            ->setCPPclCode($cPPclCode)
            ->setDlvrZC($dlvrZC)
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
     * Get DlvrZC value
     */
    public function getDlvrZC(): string
    {
        return $this->DlvrZC;
    }

    /**
     * Set DlvrZC value
     */
    public function setDlvrZC(?string $dlvrZC): self
    {
        // validation for constraint: string
        if (null !== $dlvrZC && !\is_string($dlvrZC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrZC, true), \gettype($dlvrZC)), __LINE__);
        }
        $this->DlvrZC = $dlvrZC;

        return $this;
    }
}
