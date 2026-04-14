<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateParcelStatusRequest StructType
 */
#[\AllowDynamicProperties]
class UpdateParcelStatusRequest extends AbstractStructBase
{
    /**
     * The ParcelSize
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ParcelSize = null;
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
     * The DestType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $DestType;
    /**
     * The DestName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $DestName;
    /**
     * The NewStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $NewStatus;
    /**
     * The OldStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $OldStatus;
    /**
     * The StatusChangeTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $StatusChangeTime;
    /**
     * The CourierIdCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $CourierIdCode;

    /**
     * Constructor method for UpdateParcelStatusRequest
     *
     * @uses UpdateParcelStatusRequest::setParcelSize()
     * @uses UpdateParcelStatusRequest::setSecurityID()
     * @uses UpdateParcelStatusRequest::setCPPclCode()
     * @uses UpdateParcelStatusRequest::setCsgZipCode()
     * @uses UpdateParcelStatusRequest::setDestType()
     * @uses UpdateParcelStatusRequest::setDestName()
     * @uses UpdateParcelStatusRequest::setNewStatus()
     * @uses UpdateParcelStatusRequest::setOldStatus()
     * @uses UpdateParcelStatusRequest::setStatusChangeTime()
     * @uses UpdateParcelStatusRequest::setCourierIdCode()
     */
    public function __construct(?string $parcelSize = null, ?IdentificationObject $securityID, ?string $cPPclCode, ?string $csgZipCode, ?string $destType, ?string $destName, ?string $newStatus, ?string $oldStatus, ?string $statusChangeTime, ?string $courierIdCode)
    {
        $this
            ->setParcelSize($parcelSize)
            ->setSecurityID($securityID)
            ->setCPPclCode($cPPclCode)
            ->setCsgZipCode($csgZipCode)
            ->setDestType($destType)
            ->setDestName($destName)
            ->setNewStatus($newStatus)
            ->setOldStatus($oldStatus)
            ->setStatusChangeTime($statusChangeTime)
            ->setCourierIdCode($courierIdCode)
        ;
    }

    /**
     * Get ParcelSize value
     */
    public function getParcelSize(): ?string
    {
        return $this->ParcelSize;
    }

    /**
     * Set ParcelSize value
     */
    public function setParcelSize(?string $parcelSize = null): self
    {
        // validation for constraint: string
        if (null !== $parcelSize && !\is_string($parcelSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelSize, true), \gettype($parcelSize)), __LINE__);
        }
        $this->ParcelSize = $parcelSize;

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

    /**
     * Get DestType value
     */
    public function getDestType(): string
    {
        return $this->DestType;
    }

    /**
     * Set DestType value
     */
    public function setDestType(?string $destType): self
    {
        // validation for constraint: string
        if (null !== $destType && !\is_string($destType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destType, true), \gettype($destType)), __LINE__);
        }
        $this->DestType = $destType;

        return $this;
    }

    /**
     * Get DestName value
     */
    public function getDestName(): string
    {
        return $this->DestName;
    }

    /**
     * Set DestName value
     */
    public function setDestName(?string $destName): self
    {
        // validation for constraint: string
        if (null !== $destName && !\is_string($destName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destName, true), \gettype($destName)), __LINE__);
        }
        $this->DestName = $destName;

        return $this;
    }

    /**
     * Get NewStatus value
     */
    public function getNewStatus(): string
    {
        return $this->NewStatus;
    }

    /**
     * Set NewStatus value
     */
    public function setNewStatus(?string $newStatus): self
    {
        // validation for constraint: string
        if (null !== $newStatus && !\is_string($newStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newStatus, true), \gettype($newStatus)), __LINE__);
        }
        $this->NewStatus = $newStatus;

        return $this;
    }

    /**
     * Get OldStatus value
     */
    public function getOldStatus(): string
    {
        return $this->OldStatus;
    }

    /**
     * Set OldStatus value
     */
    public function setOldStatus(?string $oldStatus): self
    {
        // validation for constraint: string
        if (null !== $oldStatus && !\is_string($oldStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldStatus, true), \gettype($oldStatus)), __LINE__);
        }
        $this->OldStatus = $oldStatus;

        return $this;
    }

    /**
     * Get StatusChangeTime value
     */
    public function getStatusChangeTime(): string
    {
        return $this->StatusChangeTime;
    }

    /**
     * Set StatusChangeTime value
     */
    public function setStatusChangeTime(?string $statusChangeTime): self
    {
        // validation for constraint: string
        if (null !== $statusChangeTime && !\is_string($statusChangeTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusChangeTime, true), \gettype($statusChangeTime)), __LINE__);
        }
        $this->StatusChangeTime = $statusChangeTime;

        return $this;
    }

    /**
     * Get CourierIdCode value
     */
    public function getCourierIdCode(): string
    {
        return $this->CourierIdCode;
    }

    /**
     * Set CourierIdCode value
     */
    public function setCourierIdCode(?string $courierIdCode): self
    {
        // validation for constraint: string
        if (null !== $courierIdCode && !\is_string($courierIdCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($courierIdCode, true), \gettype($courierIdCode)), __LINE__);
        }
        $this->CourierIdCode = $courierIdCode;

        return $this;
    }
}
