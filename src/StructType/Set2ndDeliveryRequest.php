<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Set2ndDeliveryRequest StructType
 */
#[\AllowDynamicProperties]
class Set2ndDeliveryRequest extends AbstractStructBase
{
    /**
     * The DlvrModeType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $DlvrModeType;
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
     * The DlvrAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?DeliveryAddressObject $DlvrAdd;
    /**
     * The DlvrDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $DlvrDate;

    /**
     * Constructor method for Set2ndDeliveryRequest
     *
     * @uses Set2ndDeliveryRequest::setDlvrModeType()
     * @uses Set2ndDeliveryRequest::setSecurityID()
     * @uses Set2ndDeliveryRequest::setCPPclCode()
     * @uses Set2ndDeliveryRequest::setCsgZC()
     * @uses Set2ndDeliveryRequest::setDlvrAdd()
     * @uses Set2ndDeliveryRequest::setDlvrDate()
     */
    public function __construct(string $dlvrModeType, ?IdentificationObject $securityID, ?string $cPPclCode, ?string $csgZC, ?DeliveryAddressObject $dlvrAdd, ?string $dlvrDate)
    {
        $this
            ->setDlvrModeType($dlvrModeType)
            ->setSecurityID($securityID)
            ->setCPPclCode($cPPclCode)
            ->setCsgZC($csgZC)
            ->setDlvrAdd($dlvrAdd)
            ->setDlvrDate($dlvrDate)
        ;
    }

    /**
     * Get DlvrModeType value
     */
    public function getDlvrModeType(): string
    {
        return $this->DlvrModeType;
    }

    /**
     * Set DlvrModeType value
     *
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumDeliveryModeType::valueIsValid()
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumDeliveryModeType::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setDlvrModeType(string $dlvrModeType): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperColisPrive\EnumType\EnumDeliveryModeType::valueIsValid($dlvrModeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperColisPrive\EnumType\EnumDeliveryModeType', \is_array($dlvrModeType) ? implode(', ', $dlvrModeType) : var_export($dlvrModeType, true), implode(', ', \Scraper\ScraperColisPrive\EnumType\EnumDeliveryModeType::getValidValues())), __LINE__);
        }
        $this->DlvrModeType = $dlvrModeType;

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
     * Get DlvrAdd value
     */
    public function getDlvrAdd(): DeliveryAddressObject
    {
        return $this->DlvrAdd;
    }

    /**
     * Set DlvrAdd value
     */
    public function setDlvrAdd(?DeliveryAddressObject $dlvrAdd): self
    {
        $this->DlvrAdd = $dlvrAdd;

        return $this;
    }

    /**
     * Get DlvrDate value
     */
    public function getDlvrDate(): string
    {
        return $this->DlvrDate;
    }

    /**
     * Set DlvrDate value
     */
    public function setDlvrDate(?string $dlvrDate): self
    {
        // validation for constraint: string
        if (null !== $dlvrDate && !\is_string($dlvrDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrDate, true), \gettype($dlvrDate)), __LINE__);
        }
        $this->DlvrDate = $dlvrDate;

        return $this;
    }
}
