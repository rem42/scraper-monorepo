<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPickupPointDeliveryRequest StructType
 */
#[\AllowDynamicProperties]
class SetPickupPointDeliveryRequest extends AbstractStructBase
{
    /**
     * The CsgEmail
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CsgEmail = null;
    /**
     * The CsgPhoneNum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CsgPhoneNum = null;
    /**
     * The CsgGsmNum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CsgGsmNum = null;
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
     * The CsgZC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $CsgZC;
    /**
     * The PckCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $PckCode;

    /**
     * Constructor method for SetPickupPointDeliveryRequest
     *
     * @uses SetPickupPointDeliveryRequest::setCsgEmail()
     * @uses SetPickupPointDeliveryRequest::setCsgPhoneNum()
     * @uses SetPickupPointDeliveryRequest::setCsgGsmNum()
     * @uses SetPickupPointDeliveryRequest::setSecurityID()
     * @uses SetPickupPointDeliveryRequest::setCPPclCode()
     * @uses SetPickupPointDeliveryRequest::setCsgZC()
     * @uses SetPickupPointDeliveryRequest::setPckCode()
     */
    public function __construct(?string $csgEmail = null, ?string $csgPhoneNum = null, ?string $csgGsmNum = null, ?IdentificationObject $securityID, ?string $cPPclCode, ?string $csgZC, ?string $pckCode)
    {
        $this
            ->setCsgEmail($csgEmail)
            ->setCsgPhoneNum($csgPhoneNum)
            ->setCsgGsmNum($csgGsmNum)
            ->setSecurityID($securityID)
            ->setCPPclCode($cPPclCode)
            ->setCsgZC($csgZC)
            ->setPckCode($pckCode)
        ;
    }

    /**
     * Get CsgEmail value
     */
    public function getCsgEmail(): ?string
    {
        return $this->CsgEmail;
    }

    /**
     * Set CsgEmail value
     */
    public function setCsgEmail(?string $csgEmail = null): self
    {
        // validation for constraint: string
        if (null !== $csgEmail && !\is_string($csgEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($csgEmail, true), \gettype($csgEmail)), __LINE__);
        }
        $this->CsgEmail = $csgEmail;

        return $this;
    }

    /**
     * Get CsgPhoneNum value
     */
    public function getCsgPhoneNum(): ?string
    {
        return $this->CsgPhoneNum;
    }

    /**
     * Set CsgPhoneNum value
     */
    public function setCsgPhoneNum(?string $csgPhoneNum = null): self
    {
        // validation for constraint: string
        if (null !== $csgPhoneNum && !\is_string($csgPhoneNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($csgPhoneNum, true), \gettype($csgPhoneNum)), __LINE__);
        }
        $this->CsgPhoneNum = $csgPhoneNum;

        return $this;
    }

    /**
     * Get CsgGsmNum value
     */
    public function getCsgGsmNum(): ?string
    {
        return $this->CsgGsmNum;
    }

    /**
     * Set CsgGsmNum value
     */
    public function setCsgGsmNum(?string $csgGsmNum = null): self
    {
        // validation for constraint: string
        if (null !== $csgGsmNum && !\is_string($csgGsmNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($csgGsmNum, true), \gettype($csgGsmNum)), __LINE__);
        }
        $this->CsgGsmNum = $csgGsmNum;

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
     * Get CsgZC value
     */
    public function getCsgZC(): string
    {
        return $this->CsgZC;
    }

    /**
     * Set CsgZC value
     */
    public function setCsgZC(?string $csgZC): self
    {
        // validation for constraint: string
        if (null !== $csgZC && !\is_string($csgZC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($csgZC, true), \gettype($csgZC)), __LINE__);
        }
        $this->CsgZC = $csgZC;

        return $this;
    }

    /**
     * Get PckCode value
     */
    public function getPckCode(): string
    {
        return $this->PckCode;
    }

    /**
     * Set PckCode value
     */
    public function setPckCode(?string $pckCode): self
    {
        // validation for constraint: string
        if (null !== $pckCode && !\is_string($pckCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckCode, true), \gettype($pckCode)), __LINE__);
        }
        $this->PckCode = $pckCode;

        return $this;
    }
}
