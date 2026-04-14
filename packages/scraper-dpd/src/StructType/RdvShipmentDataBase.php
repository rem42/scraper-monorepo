<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RdvShipmentDataBase StructType
 */
#[\AllowDynamicProperties]
class RdvShipmentDataBase extends AbstractStructBase
{
    /**
     * The ParcelOptional
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $ParcelOptional;
    /**
     * The SC_CenterNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $SC_CenterNumber;
    /**
     * The RC_CenterNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $RC_CenterNumber;
    /**
     * The Weight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected float $Weight;
    /**
     * The NumberOfParcelsReal
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $NumberOfParcelsReal;
    /**
     * The CustomerRDVProfile
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $CustomerRDVProfile;
    /**
     * The SavePlaceRDVAllowed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $SavePlaceRDVAllowed;
    /**
     * The RDVServiceAllowed
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $RDVServiceAllowed;
    /**
     * The Predict
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $Predict;
    /**
     * The RdvUpdateable
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $RdvUpdateable;
    /**
     * The ShippingDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ShippingDate = null;
    /**
     * The PredictCutOffDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PredictCutOffDate = null;
    /**
     * The ShipperName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ShipperName = null;
    /**
     * The ReceiverAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?RdvAddress $ReceiverAddress = null;
    /**
     * The ReceiverEmailAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ReceiverEmailAddress = null;
    /**
     * The ReceiverMobileNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ReceiverMobileNumber = null;
    /**
     * The ReceiverAltZipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ReceiverAltZipCode = null;
    /**
     * The ShipperInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?RdvDeliveryInfo $ShipperInfo = null;
    /**
     * The RdvInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?RdvDeliveryInfo $RdvInfo = null;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfRdvService $Services = null;

    /**
     * Constructor method for RdvShipmentDataBase
     *
     * @uses RdvShipmentDataBase::setParcelOptional()
     * @uses RdvShipmentDataBase::setSC_CenterNumber()
     * @uses RdvShipmentDataBase::setRC_CenterNumber()
     * @uses RdvShipmentDataBase::setWeight()
     * @uses RdvShipmentDataBase::setNumberOfParcelsReal()
     * @uses RdvShipmentDataBase::setCustomerRDVProfile()
     * @uses RdvShipmentDataBase::setSavePlaceRDVAllowed()
     * @uses RdvShipmentDataBase::setRDVServiceAllowed()
     * @uses RdvShipmentDataBase::setPredict()
     * @uses RdvShipmentDataBase::setRdvUpdateable()
     * @uses RdvShipmentDataBase::setShippingDate()
     * @uses RdvShipmentDataBase::setPredictCutOffDate()
     * @uses RdvShipmentDataBase::setShipperName()
     * @uses RdvShipmentDataBase::setReceiverAddress()
     * @uses RdvShipmentDataBase::setReceiverEmailAddress()
     * @uses RdvShipmentDataBase::setReceiverMobileNumber()
     * @uses RdvShipmentDataBase::setReceiverAltZipCode()
     * @uses RdvShipmentDataBase::setShipperInfo()
     * @uses RdvShipmentDataBase::setRdvInfo()
     * @uses RdvShipmentDataBase::setServices()
     */
    public function __construct(bool $parcelOptional, int $sC_CenterNumber, int $rC_CenterNumber, float $weight, int $numberOfParcelsReal, bool $customerRDVProfile, bool $savePlaceRDVAllowed, bool $rDVServiceAllowed, bool $predict, bool $rdvUpdateable, ?string $shippingDate = null, ?string $predictCutOffDate = null, ?string $shipperName = null, ?RdvAddress $receiverAddress = null, ?string $receiverEmailAddress = null, ?string $receiverMobileNumber = null, ?string $receiverAltZipCode = null, ?RdvDeliveryInfo $shipperInfo = null, ?RdvDeliveryInfo $rdvInfo = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfRdvService $services = null)
    {
        $this
            ->setParcelOptional($parcelOptional)
            ->setSC_CenterNumber($sC_CenterNumber)
            ->setRC_CenterNumber($rC_CenterNumber)
            ->setWeight($weight)
            ->setNumberOfParcelsReal($numberOfParcelsReal)
            ->setCustomerRDVProfile($customerRDVProfile)
            ->setSavePlaceRDVAllowed($savePlaceRDVAllowed)
            ->setRDVServiceAllowed($rDVServiceAllowed)
            ->setPredict($predict)
            ->setRdvUpdateable($rdvUpdateable)
            ->setShippingDate($shippingDate)
            ->setPredictCutOffDate($predictCutOffDate)
            ->setShipperName($shipperName)
            ->setReceiverAddress($receiverAddress)
            ->setReceiverEmailAddress($receiverEmailAddress)
            ->setReceiverMobileNumber($receiverMobileNumber)
            ->setReceiverAltZipCode($receiverAltZipCode)
            ->setShipperInfo($shipperInfo)
            ->setRdvInfo($rdvInfo)
            ->setServices($services)
        ;
    }

    /**
     * Get ParcelOptional value
     */
    public function getParcelOptional(): bool
    {
        return $this->ParcelOptional;
    }

    /**
     * Set ParcelOptional value
     */
    public function setParcelOptional(bool $parcelOptional): self
    {
        // validation for constraint: boolean
        if (null !== $parcelOptional && !\is_bool($parcelOptional)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($parcelOptional, true), \gettype($parcelOptional)), __LINE__);
        }
        $this->ParcelOptional = $parcelOptional;

        return $this;
    }

    /**
     * Get SC_CenterNumber value
     */
    public function getSC_CenterNumber(): int
    {
        return $this->SC_CenterNumber;
    }

    /**
     * Set SC_CenterNumber value
     */
    public function setSC_CenterNumber(int $sC_CenterNumber): self
    {
        // validation for constraint: int
        if (null !== $sC_CenterNumber && !(\is_int($sC_CenterNumber) || ctype_digit($sC_CenterNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sC_CenterNumber, true), \gettype($sC_CenterNumber)), __LINE__);
        }
        $this->SC_CenterNumber = $sC_CenterNumber;

        return $this;
    }

    /**
     * Get RC_CenterNumber value
     */
    public function getRC_CenterNumber(): int
    {
        return $this->RC_CenterNumber;
    }

    /**
     * Set RC_CenterNumber value
     */
    public function setRC_CenterNumber(int $rC_CenterNumber): self
    {
        // validation for constraint: int
        if (null !== $rC_CenterNumber && !(\is_int($rC_CenterNumber) || ctype_digit($rC_CenterNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rC_CenterNumber, true), \gettype($rC_CenterNumber)), __LINE__);
        }
        $this->RC_CenterNumber = $rC_CenterNumber;

        return $this;
    }

    /**
     * Get Weight value
     */
    public function getWeight(): float
    {
        return $this->Weight;
    }

    /**
     * Set Weight value
     */
    public function setWeight(float $weight): self
    {
        // validation for constraint: float
        if (null !== $weight && !(\is_float($weight) || is_numeric($weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), \gettype($weight)), __LINE__);
        }
        $this->Weight = $weight;

        return $this;
    }

    /**
     * Get NumberOfParcelsReal value
     */
    public function getNumberOfParcelsReal(): int
    {
        return $this->NumberOfParcelsReal;
    }

    /**
     * Set NumberOfParcelsReal value
     */
    public function setNumberOfParcelsReal(int $numberOfParcelsReal): self
    {
        // validation for constraint: int
        if (null !== $numberOfParcelsReal && !(\is_int($numberOfParcelsReal) || ctype_digit($numberOfParcelsReal))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfParcelsReal, true), \gettype($numberOfParcelsReal)), __LINE__);
        }
        $this->NumberOfParcelsReal = $numberOfParcelsReal;

        return $this;
    }

    /**
     * Get CustomerRDVProfile value
     */
    public function getCustomerRDVProfile(): bool
    {
        return $this->CustomerRDVProfile;
    }

    /**
     * Set CustomerRDVProfile value
     */
    public function setCustomerRDVProfile(bool $customerRDVProfile): self
    {
        // validation for constraint: boolean
        if (null !== $customerRDVProfile && !\is_bool($customerRDVProfile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($customerRDVProfile, true), \gettype($customerRDVProfile)), __LINE__);
        }
        $this->CustomerRDVProfile = $customerRDVProfile;

        return $this;
    }

    /**
     * Get SavePlaceRDVAllowed value
     */
    public function getSavePlaceRDVAllowed(): bool
    {
        return $this->SavePlaceRDVAllowed;
    }

    /**
     * Set SavePlaceRDVAllowed value
     */
    public function setSavePlaceRDVAllowed(bool $savePlaceRDVAllowed): self
    {
        // validation for constraint: boolean
        if (null !== $savePlaceRDVAllowed && !\is_bool($savePlaceRDVAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($savePlaceRDVAllowed, true), \gettype($savePlaceRDVAllowed)), __LINE__);
        }
        $this->SavePlaceRDVAllowed = $savePlaceRDVAllowed;

        return $this;
    }

    /**
     * Get RDVServiceAllowed value
     */
    public function getRDVServiceAllowed(): bool
    {
        return $this->RDVServiceAllowed;
    }

    /**
     * Set RDVServiceAllowed value
     */
    public function setRDVServiceAllowed(bool $rDVServiceAllowed): self
    {
        // validation for constraint: boolean
        if (null !== $rDVServiceAllowed && !\is_bool($rDVServiceAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rDVServiceAllowed, true), \gettype($rDVServiceAllowed)), __LINE__);
        }
        $this->RDVServiceAllowed = $rDVServiceAllowed;

        return $this;
    }

    /**
     * Get Predict value
     */
    public function getPredict(): bool
    {
        return $this->Predict;
    }

    /**
     * Set Predict value
     */
    public function setPredict(bool $predict): self
    {
        // validation for constraint: boolean
        if (null !== $predict && !\is_bool($predict)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($predict, true), \gettype($predict)), __LINE__);
        }
        $this->Predict = $predict;

        return $this;
    }

    /**
     * Get RdvUpdateable value
     */
    public function getRdvUpdateable(): bool
    {
        return $this->RdvUpdateable;
    }

    /**
     * Set RdvUpdateable value
     */
    public function setRdvUpdateable(bool $rdvUpdateable): self
    {
        // validation for constraint: boolean
        if (null !== $rdvUpdateable && !\is_bool($rdvUpdateable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rdvUpdateable, true), \gettype($rdvUpdateable)), __LINE__);
        }
        $this->RdvUpdateable = $rdvUpdateable;

        return $this;
    }

    /**
     * Get ShippingDate value
     */
    public function getShippingDate(): ?string
    {
        return $this->ShippingDate;
    }

    /**
     * Set ShippingDate value
     */
    public function setShippingDate(?string $shippingDate = null): self
    {
        // validation for constraint: string
        if (null !== $shippingDate && !\is_string($shippingDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingDate, true), \gettype($shippingDate)), __LINE__);
        }
        $this->ShippingDate = $shippingDate;

        return $this;
    }

    /**
     * Get PredictCutOffDate value
     */
    public function getPredictCutOffDate(): ?string
    {
        return $this->PredictCutOffDate;
    }

    /**
     * Set PredictCutOffDate value
     */
    public function setPredictCutOffDate(?string $predictCutOffDate = null): self
    {
        // validation for constraint: string
        if (null !== $predictCutOffDate && !\is_string($predictCutOffDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($predictCutOffDate, true), \gettype($predictCutOffDate)), __LINE__);
        }
        $this->PredictCutOffDate = $predictCutOffDate;

        return $this;
    }

    /**
     * Get ShipperName value
     */
    public function getShipperName(): ?string
    {
        return $this->ShipperName;
    }

    /**
     * Set ShipperName value
     */
    public function setShipperName(?string $shipperName = null): self
    {
        // validation for constraint: string
        if (null !== $shipperName && !\is_string($shipperName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipperName, true), \gettype($shipperName)), __LINE__);
        }
        $this->ShipperName = $shipperName;

        return $this;
    }

    /**
     * Get ReceiverAddress value
     */
    public function getReceiverAddress(): ?RdvAddress
    {
        return $this->ReceiverAddress;
    }

    /**
     * Set ReceiverAddress value
     */
    public function setReceiverAddress(?RdvAddress $receiverAddress = null): self
    {
        $this->ReceiverAddress = $receiverAddress;

        return $this;
    }

    /**
     * Get ReceiverEmailAddress value
     */
    public function getReceiverEmailAddress(): ?string
    {
        return $this->ReceiverEmailAddress;
    }

    /**
     * Set ReceiverEmailAddress value
     */
    public function setReceiverEmailAddress(?string $receiverEmailAddress = null): self
    {
        // validation for constraint: string
        if (null !== $receiverEmailAddress && !\is_string($receiverEmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiverEmailAddress, true), \gettype($receiverEmailAddress)), __LINE__);
        }
        $this->ReceiverEmailAddress = $receiverEmailAddress;

        return $this;
    }

    /**
     * Get ReceiverMobileNumber value
     */
    public function getReceiverMobileNumber(): ?string
    {
        return $this->ReceiverMobileNumber;
    }

    /**
     * Set ReceiverMobileNumber value
     */
    public function setReceiverMobileNumber(?string $receiverMobileNumber = null): self
    {
        // validation for constraint: string
        if (null !== $receiverMobileNumber && !\is_string($receiverMobileNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiverMobileNumber, true), \gettype($receiverMobileNumber)), __LINE__);
        }
        $this->ReceiverMobileNumber = $receiverMobileNumber;

        return $this;
    }

    /**
     * Get ReceiverAltZipCode value
     */
    public function getReceiverAltZipCode(): ?string
    {
        return $this->ReceiverAltZipCode;
    }

    /**
     * Set ReceiverAltZipCode value
     */
    public function setReceiverAltZipCode(?string $receiverAltZipCode = null): self
    {
        // validation for constraint: string
        if (null !== $receiverAltZipCode && !\is_string($receiverAltZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiverAltZipCode, true), \gettype($receiverAltZipCode)), __LINE__);
        }
        $this->ReceiverAltZipCode = $receiverAltZipCode;

        return $this;
    }

    /**
     * Get ShipperInfo value
     */
    public function getShipperInfo(): ?RdvDeliveryInfo
    {
        return $this->ShipperInfo;
    }

    /**
     * Set ShipperInfo value
     */
    public function setShipperInfo(?RdvDeliveryInfo $shipperInfo = null): self
    {
        $this->ShipperInfo = $shipperInfo;

        return $this;
    }

    /**
     * Get RdvInfo value
     */
    public function getRdvInfo(): ?RdvDeliveryInfo
    {
        return $this->RdvInfo;
    }

    /**
     * Set RdvInfo value
     */
    public function setRdvInfo(?RdvDeliveryInfo $rdvInfo = null): self
    {
        $this->RdvInfo = $rdvInfo;

        return $this;
    }

    /**
     * Get Services value
     */
    public function getServices(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfRdvService
    {
        return $this->Services;
    }

    /**
     * Set Services value
     */
    public function setServices(?\Scraper\ScraperDPD\ArrayType\ArrayOfRdvService $services = null): self
    {
        $this->Services = $services;

        return $this;
    }
}
