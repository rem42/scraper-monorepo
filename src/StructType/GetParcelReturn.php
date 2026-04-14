<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetParcelReturn StructType
 */
#[\AllowDynamicProperties]
class GetParcelReturn extends AbstractStructBase
{
    /**
     * The ChargeAmnt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected float $ChargeAmnt;
    /**
     * The ValueAmnt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected float $ValueAmnt;
    /**
     * The IsDlvrScheduleOk
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $IsDlvrScheduleOk;
    /**
     * The IsPclWithPOD
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $IsPclWithPOD;
    /**
     * The IsDlvr3PartyOk
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $IsDlvr3PartyOk;
    /**
     * The IsDlvrPckOk
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $IsDlvrPckOk;
    /**
     * The IsClaimOk
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $IsClaimOk;
    /**
     * The CmpyCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $CmpyCode;
    /**
     * The WSResp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ResponseObject $WSResp = null;
    /**
     * The CPPclCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CPPclCode = null;
    /**
     * The CsgAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?DeliveryAddressObject $CsgAdd = null;
    /**
     * The ThirdPartyAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?DeliveryAddressObject $ThirdPartyAdd = null;
    /**
     * The DlvrPlnDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DlvrPlnDate = null;
    /**
     * The CustoName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CustoName = null;
    /**
     * The CurrentStatusDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CurrentStatusDate = null;
    /**
     * The CurrentStatusCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CurrentStatusCode = null;
    /**
     * The CurrentStatusDesc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CurrentStatusDesc = null;
    /**
     * The CPPrdCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CPPrdCode = null;
    /**
     * The CPPrdName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CPPrdName = null;
    /**
     * The PckPoint
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?PickupPointObject $PckPoint = null;
    /**
     * The DlvrScheduleKoMsg
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DlvrScheduleKoMsg = null;
    /**
     * The ClaimKoMsg
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ClaimKoMsg = null;
    /**
     * The ShipModeCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ShipModeCode = null;
    /**
     * The PclStatusHisto
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     *
     * @var array<\Scraper\ScraperColisPrive\StructType\StatusObject>
     */
    protected ?array $PclStatusHisto = null;
    /**
     * The CustoCarePhoneNum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CustoCarePhoneNum = null;
    /**
     * The CustoCareMention
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CustoCareMention = null;
    /**
     * The CitiesDlvr
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     *
     * @var array<\Scraper\ScraperColisPrive\StructType\CityObject>
     */
    protected ?array $CitiesDlvr = null;
    /**
     * The CmpyPclCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CmpyPclCode = null;

    /**
     * Constructor method for GetParcelReturn
     *
     * @uses GetParcelReturn::setChargeAmnt()
     * @uses GetParcelReturn::setValueAmnt()
     * @uses GetParcelReturn::setIsDlvrScheduleOk()
     * @uses GetParcelReturn::setIsPclWithPOD()
     * @uses GetParcelReturn::setIsDlvr3PartyOk()
     * @uses GetParcelReturn::setIsDlvrPckOk()
     * @uses GetParcelReturn::setIsClaimOk()
     * @uses GetParcelReturn::setCmpyCode()
     * @uses GetParcelReturn::setWSResp()
     * @uses GetParcelReturn::setCPPclCode()
     * @uses GetParcelReturn::setCsgAdd()
     * @uses GetParcelReturn::setThirdPartyAdd()
     * @uses GetParcelReturn::setDlvrPlnDate()
     * @uses GetParcelReturn::setCustoName()
     * @uses GetParcelReturn::setCurrentStatusDate()
     * @uses GetParcelReturn::setCurrentStatusCode()
     * @uses GetParcelReturn::setCurrentStatusDesc()
     * @uses GetParcelReturn::setCPPrdCode()
     * @uses GetParcelReturn::setCPPrdName()
     * @uses GetParcelReturn::setPckPoint()
     * @uses GetParcelReturn::setDlvrScheduleKoMsg()
     * @uses GetParcelReturn::setClaimKoMsg()
     * @uses GetParcelReturn::setShipModeCode()
     * @uses GetParcelReturn::setPclStatusHisto()
     * @uses GetParcelReturn::setCustoCarePhoneNum()
     * @uses GetParcelReturn::setCustoCareMention()
     * @uses GetParcelReturn::setCitiesDlvr()
     * @uses GetParcelReturn::setCmpyPclCode()
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\StatusObject> $pclStatusHisto
     * @param array<\Scraper\ScraperColisPrive\StructType\CityObject>   $citiesDlvr
     */
    public function __construct(float $chargeAmnt, float $valueAmnt, bool $isDlvrScheduleOk, bool $isPclWithPOD, bool $isDlvr3PartyOk, bool $isDlvrPckOk, bool $isClaimOk, string $cmpyCode, ?ResponseObject $wSResp = null, ?string $cPPclCode = null, ?DeliveryAddressObject $csgAdd = null, ?DeliveryAddressObject $thirdPartyAdd = null, ?string $dlvrPlnDate = null, ?string $custoName = null, ?string $currentStatusDate = null, ?string $currentStatusCode = null, ?string $currentStatusDesc = null, ?string $cPPrdCode = null, ?string $cPPrdName = null, ?PickupPointObject $pckPoint = null, ?string $dlvrScheduleKoMsg = null, ?string $claimKoMsg = null, ?string $shipModeCode = null, ?array $pclStatusHisto = null, ?string $custoCarePhoneNum = null, ?string $custoCareMention = null, ?array $citiesDlvr = null, ?string $cmpyPclCode = null)
    {
        $this
            ->setChargeAmnt($chargeAmnt)
            ->setValueAmnt($valueAmnt)
            ->setIsDlvrScheduleOk($isDlvrScheduleOk)
            ->setIsPclWithPOD($isPclWithPOD)
            ->setIsDlvr3PartyOk($isDlvr3PartyOk)
            ->setIsDlvrPckOk($isDlvrPckOk)
            ->setIsClaimOk($isClaimOk)
            ->setCmpyCode($cmpyCode)
            ->setWSResp($wSResp)
            ->setCPPclCode($cPPclCode)
            ->setCsgAdd($csgAdd)
            ->setThirdPartyAdd($thirdPartyAdd)
            ->setDlvrPlnDate($dlvrPlnDate)
            ->setCustoName($custoName)
            ->setCurrentStatusDate($currentStatusDate)
            ->setCurrentStatusCode($currentStatusCode)
            ->setCurrentStatusDesc($currentStatusDesc)
            ->setCPPrdCode($cPPrdCode)
            ->setCPPrdName($cPPrdName)
            ->setPckPoint($pckPoint)
            ->setDlvrScheduleKoMsg($dlvrScheduleKoMsg)
            ->setClaimKoMsg($claimKoMsg)
            ->setShipModeCode($shipModeCode)
            ->setPclStatusHisto($pclStatusHisto)
            ->setCustoCarePhoneNum($custoCarePhoneNum)
            ->setCustoCareMention($custoCareMention)
            ->setCitiesDlvr($citiesDlvr)
            ->setCmpyPclCode($cmpyPclCode)
        ;
    }

    /**
     * Get ChargeAmnt value
     */
    public function getChargeAmnt(): float
    {
        return $this->ChargeAmnt;
    }

    /**
     * Set ChargeAmnt value
     */
    public function setChargeAmnt(float $chargeAmnt): self
    {
        // validation for constraint: float
        if (null !== $chargeAmnt && !(\is_float($chargeAmnt) || is_numeric($chargeAmnt))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($chargeAmnt, true), \gettype($chargeAmnt)), __LINE__);
        }
        $this->ChargeAmnt = $chargeAmnt;

        return $this;
    }

    /**
     * Get ValueAmnt value
     */
    public function getValueAmnt(): float
    {
        return $this->ValueAmnt;
    }

    /**
     * Set ValueAmnt value
     */
    public function setValueAmnt(float $valueAmnt): self
    {
        // validation for constraint: float
        if (null !== $valueAmnt && !(\is_float($valueAmnt) || is_numeric($valueAmnt))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valueAmnt, true), \gettype($valueAmnt)), __LINE__);
        }
        $this->ValueAmnt = $valueAmnt;

        return $this;
    }

    /**
     * Get IsDlvrScheduleOk value
     */
    public function getIsDlvrScheduleOk(): bool
    {
        return $this->IsDlvrScheduleOk;
    }

    /**
     * Set IsDlvrScheduleOk value
     */
    public function setIsDlvrScheduleOk(bool $isDlvrScheduleOk): self
    {
        // validation for constraint: boolean
        if (null !== $isDlvrScheduleOk && !\is_bool($isDlvrScheduleOk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDlvrScheduleOk, true), \gettype($isDlvrScheduleOk)), __LINE__);
        }
        $this->IsDlvrScheduleOk = $isDlvrScheduleOk;

        return $this;
    }

    /**
     * Get IsPclWithPOD value
     */
    public function getIsPclWithPOD(): bool
    {
        return $this->IsPclWithPOD;
    }

    /**
     * Set IsPclWithPOD value
     */
    public function setIsPclWithPOD(bool $isPclWithPOD): self
    {
        // validation for constraint: boolean
        if (null !== $isPclWithPOD && !\is_bool($isPclWithPOD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPclWithPOD, true), \gettype($isPclWithPOD)), __LINE__);
        }
        $this->IsPclWithPOD = $isPclWithPOD;

        return $this;
    }

    /**
     * Get IsDlvr3PartyOk value
     */
    public function getIsDlvr3PartyOk(): bool
    {
        return $this->IsDlvr3PartyOk;
    }

    /**
     * Set IsDlvr3PartyOk value
     */
    public function setIsDlvr3PartyOk(bool $isDlvr3PartyOk): self
    {
        // validation for constraint: boolean
        if (null !== $isDlvr3PartyOk && !\is_bool($isDlvr3PartyOk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDlvr3PartyOk, true), \gettype($isDlvr3PartyOk)), __LINE__);
        }
        $this->IsDlvr3PartyOk = $isDlvr3PartyOk;

        return $this;
    }

    /**
     * Get IsDlvrPckOk value
     */
    public function getIsDlvrPckOk(): bool
    {
        return $this->IsDlvrPckOk;
    }

    /**
     * Set IsDlvrPckOk value
     */
    public function setIsDlvrPckOk(bool $isDlvrPckOk): self
    {
        // validation for constraint: boolean
        if (null !== $isDlvrPckOk && !\is_bool($isDlvrPckOk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDlvrPckOk, true), \gettype($isDlvrPckOk)), __LINE__);
        }
        $this->IsDlvrPckOk = $isDlvrPckOk;

        return $this;
    }

    /**
     * Get IsClaimOk value
     */
    public function getIsClaimOk(): bool
    {
        return $this->IsClaimOk;
    }

    /**
     * Set IsClaimOk value
     */
    public function setIsClaimOk(bool $isClaimOk): self
    {
        // validation for constraint: boolean
        if (null !== $isClaimOk && !\is_bool($isClaimOk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isClaimOk, true), \gettype($isClaimOk)), __LINE__);
        }
        $this->IsClaimOk = $isClaimOk;

        return $this;
    }

    /**
     * Get CmpyCode value
     */
    public function getCmpyCode(): string
    {
        return $this->CmpyCode;
    }

    /**
     * Set CmpyCode value
     *
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumCompanyCode::valueIsValid()
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumCompanyCode::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setCmpyCode(string $cmpyCode): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperColisPrive\EnumType\EnumCompanyCode::valueIsValid($cmpyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperColisPrive\EnumType\EnumCompanyCode', \is_array($cmpyCode) ? implode(', ', $cmpyCode) : var_export($cmpyCode, true), implode(', ', \Scraper\ScraperColisPrive\EnumType\EnumCompanyCode::getValidValues())), __LINE__);
        }
        $this->CmpyCode = $cmpyCode;

        return $this;
    }

    /**
     * Get WSResp value
     */
    public function getWSResp(): ?ResponseObject
    {
        return $this->WSResp;
    }

    /**
     * Set WSResp value
     */
    public function setWSResp(?ResponseObject $wSResp = null): self
    {
        $this->WSResp = $wSResp;

        return $this;
    }

    /**
     * Get CPPclCode value
     */
    public function getCPPclCode(): ?string
    {
        return $this->CPPclCode;
    }

    /**
     * Set CPPclCode value
     */
    public function setCPPclCode(?string $cPPclCode = null): self
    {
        // validation for constraint: string
        if (null !== $cPPclCode && !\is_string($cPPclCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPPclCode, true), \gettype($cPPclCode)), __LINE__);
        }
        $this->CPPclCode = $cPPclCode;

        return $this;
    }

    /**
     * Get CsgAdd value
     */
    public function getCsgAdd(): ?DeliveryAddressObject
    {
        return $this->CsgAdd;
    }

    /**
     * Set CsgAdd value
     */
    public function setCsgAdd(?DeliveryAddressObject $csgAdd = null): self
    {
        $this->CsgAdd = $csgAdd;

        return $this;
    }

    /**
     * Get ThirdPartyAdd value
     */
    public function getThirdPartyAdd(): ?DeliveryAddressObject
    {
        return $this->ThirdPartyAdd;
    }

    /**
     * Set ThirdPartyAdd value
     */
    public function setThirdPartyAdd(?DeliveryAddressObject $thirdPartyAdd = null): self
    {
        $this->ThirdPartyAdd = $thirdPartyAdd;

        return $this;
    }

    /**
     * Get DlvrPlnDate value
     */
    public function getDlvrPlnDate(): ?string
    {
        return $this->DlvrPlnDate;
    }

    /**
     * Set DlvrPlnDate value
     */
    public function setDlvrPlnDate(?string $dlvrPlnDate = null): self
    {
        // validation for constraint: string
        if (null !== $dlvrPlnDate && !\is_string($dlvrPlnDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrPlnDate, true), \gettype($dlvrPlnDate)), __LINE__);
        }
        $this->DlvrPlnDate = $dlvrPlnDate;

        return $this;
    }

    /**
     * Get CustoName value
     */
    public function getCustoName(): ?string
    {
        return $this->CustoName;
    }

    /**
     * Set CustoName value
     */
    public function setCustoName(?string $custoName = null): self
    {
        // validation for constraint: string
        if (null !== $custoName && !\is_string($custoName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custoName, true), \gettype($custoName)), __LINE__);
        }
        $this->CustoName = $custoName;

        return $this;
    }

    /**
     * Get CurrentStatusDate value
     */
    public function getCurrentStatusDate(): ?string
    {
        return $this->CurrentStatusDate;
    }

    /**
     * Set CurrentStatusDate value
     */
    public function setCurrentStatusDate(?string $currentStatusDate = null): self
    {
        // validation for constraint: string
        if (null !== $currentStatusDate && !\is_string($currentStatusDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentStatusDate, true), \gettype($currentStatusDate)), __LINE__);
        }
        $this->CurrentStatusDate = $currentStatusDate;

        return $this;
    }

    /**
     * Get CurrentStatusCode value
     */
    public function getCurrentStatusCode(): ?string
    {
        return $this->CurrentStatusCode;
    }

    /**
     * Set CurrentStatusCode value
     */
    public function setCurrentStatusCode(?string $currentStatusCode = null): self
    {
        // validation for constraint: string
        if (null !== $currentStatusCode && !\is_string($currentStatusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentStatusCode, true), \gettype($currentStatusCode)), __LINE__);
        }
        $this->CurrentStatusCode = $currentStatusCode;

        return $this;
    }

    /**
     * Get CurrentStatusDesc value
     */
    public function getCurrentStatusDesc(): ?string
    {
        return $this->CurrentStatusDesc;
    }

    /**
     * Set CurrentStatusDesc value
     */
    public function setCurrentStatusDesc(?string $currentStatusDesc = null): self
    {
        // validation for constraint: string
        if (null !== $currentStatusDesc && !\is_string($currentStatusDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentStatusDesc, true), \gettype($currentStatusDesc)), __LINE__);
        }
        $this->CurrentStatusDesc = $currentStatusDesc;

        return $this;
    }

    /**
     * Get CPPrdCode value
     */
    public function getCPPrdCode(): ?string
    {
        return $this->CPPrdCode;
    }

    /**
     * Set CPPrdCode value
     */
    public function setCPPrdCode(?string $cPPrdCode = null): self
    {
        // validation for constraint: string
        if (null !== $cPPrdCode && !\is_string($cPPrdCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPPrdCode, true), \gettype($cPPrdCode)), __LINE__);
        }
        $this->CPPrdCode = $cPPrdCode;

        return $this;
    }

    /**
     * Get CPPrdName value
     */
    public function getCPPrdName(): ?string
    {
        return $this->CPPrdName;
    }

    /**
     * Set CPPrdName value
     */
    public function setCPPrdName(?string $cPPrdName = null): self
    {
        // validation for constraint: string
        if (null !== $cPPrdName && !\is_string($cPPrdName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPPrdName, true), \gettype($cPPrdName)), __LINE__);
        }
        $this->CPPrdName = $cPPrdName;

        return $this;
    }

    /**
     * Get PckPoint value
     */
    public function getPckPoint(): ?PickupPointObject
    {
        return $this->PckPoint;
    }

    /**
     * Set PckPoint value
     */
    public function setPckPoint(?PickupPointObject $pckPoint = null): self
    {
        $this->PckPoint = $pckPoint;

        return $this;
    }

    /**
     * Get DlvrScheduleKoMsg value
     */
    public function getDlvrScheduleKoMsg(): ?string
    {
        return $this->DlvrScheduleKoMsg;
    }

    /**
     * Set DlvrScheduleKoMsg value
     */
    public function setDlvrScheduleKoMsg(?string $dlvrScheduleKoMsg = null): self
    {
        // validation for constraint: string
        if (null !== $dlvrScheduleKoMsg && !\is_string($dlvrScheduleKoMsg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrScheduleKoMsg, true), \gettype($dlvrScheduleKoMsg)), __LINE__);
        }
        $this->DlvrScheduleKoMsg = $dlvrScheduleKoMsg;

        return $this;
    }

    /**
     * Get ClaimKoMsg value
     */
    public function getClaimKoMsg(): ?string
    {
        return $this->ClaimKoMsg;
    }

    /**
     * Set ClaimKoMsg value
     */
    public function setClaimKoMsg(?string $claimKoMsg = null): self
    {
        // validation for constraint: string
        if (null !== $claimKoMsg && !\is_string($claimKoMsg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($claimKoMsg, true), \gettype($claimKoMsg)), __LINE__);
        }
        $this->ClaimKoMsg = $claimKoMsg;

        return $this;
    }

    /**
     * Get ShipModeCode value
     */
    public function getShipModeCode(): ?string
    {
        return $this->ShipModeCode;
    }

    /**
     * Set ShipModeCode value
     */
    public function setShipModeCode(?string $shipModeCode = null): self
    {
        // validation for constraint: string
        if (null !== $shipModeCode && !\is_string($shipModeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipModeCode, true), \gettype($shipModeCode)), __LINE__);
        }
        $this->ShipModeCode = $shipModeCode;

        return $this;
    }

    /**
     * Get PclStatusHisto value
     *
     * @return array<\Scraper\ScraperColisPrive\StructType\StatusObject>
     */
    public function getPclStatusHisto(): ?array
    {
        return $this->PclStatusHisto;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPclStatusHisto method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPclStatusHisto method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePclStatusHistoForArrayConstraintFromSetPclStatusHisto(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $getParcelReturnPclStatusHistoItem) {
            // validation for constraint: itemType
            if (!$getParcelReturnPclStatusHistoItem instanceof StatusObject) {
                $invalidValues[] = \is_object($getParcelReturnPclStatusHistoItem) ? $getParcelReturnPclStatusHistoItem::class : sprintf('%s(%s)', \gettype($getParcelReturnPclStatusHistoItem), var_export($getParcelReturnPclStatusHistoItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The PclStatusHisto property can only contain items of type \Scraper\ScraperColisPrive\StructType\StatusObject, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set PclStatusHisto value
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\StatusObject> $pclStatusHisto
     *
     * @throws \InvalidArgumentException
     */
    public function setPclStatusHisto(?array $pclStatusHisto = null): self
    {
        // validation for constraint: array
        if ('' !== ($pclStatusHistoArrayErrorMessage = self::validatePclStatusHistoForArrayConstraintFromSetPclStatusHisto($pclStatusHisto))) {
            throw new \InvalidArgumentException($pclStatusHistoArrayErrorMessage, __LINE__);
        }
        $this->PclStatusHisto = $pclStatusHisto;

        return $this;
    }

    /**
     * Add item to PclStatusHisto value
     *
     * @throws \InvalidArgumentException
     */
    public function addToPclStatusHisto(StatusObject $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof StatusObject) {
            throw new \InvalidArgumentException(sprintf('The PclStatusHisto property can only contain items of type \Scraper\ScraperColisPrive\StructType\StatusObject, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->PclStatusHisto[] = $item;

        return $this;
    }

    /**
     * Get CustoCarePhoneNum value
     */
    public function getCustoCarePhoneNum(): ?string
    {
        return $this->CustoCarePhoneNum;
    }

    /**
     * Set CustoCarePhoneNum value
     */
    public function setCustoCarePhoneNum(?string $custoCarePhoneNum = null): self
    {
        // validation for constraint: string
        if (null !== $custoCarePhoneNum && !\is_string($custoCarePhoneNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custoCarePhoneNum, true), \gettype($custoCarePhoneNum)), __LINE__);
        }
        $this->CustoCarePhoneNum = $custoCarePhoneNum;

        return $this;
    }

    /**
     * Get CustoCareMention value
     */
    public function getCustoCareMention(): ?string
    {
        return $this->CustoCareMention;
    }

    /**
     * Set CustoCareMention value
     */
    public function setCustoCareMention(?string $custoCareMention = null): self
    {
        // validation for constraint: string
        if (null !== $custoCareMention && !\is_string($custoCareMention)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custoCareMention, true), \gettype($custoCareMention)), __LINE__);
        }
        $this->CustoCareMention = $custoCareMention;

        return $this;
    }

    /**
     * Get CitiesDlvr value
     *
     * @return array<\Scraper\ScraperColisPrive\StructType\CityObject>
     */
    public function getCitiesDlvr(): ?array
    {
        return $this->CitiesDlvr;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setCitiesDlvr method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCitiesDlvr method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCitiesDlvrForArrayConstraintFromSetCitiesDlvr(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $getParcelReturnCitiesDlvrItem) {
            // validation for constraint: itemType
            if (!$getParcelReturnCitiesDlvrItem instanceof CityObject) {
                $invalidValues[] = \is_object($getParcelReturnCitiesDlvrItem) ? $getParcelReturnCitiesDlvrItem::class : sprintf('%s(%s)', \gettype($getParcelReturnCitiesDlvrItem), var_export($getParcelReturnCitiesDlvrItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The CitiesDlvr property can only contain items of type \Scraper\ScraperColisPrive\StructType\CityObject, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set CitiesDlvr value
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\CityObject> $citiesDlvr
     *
     * @throws \InvalidArgumentException
     */
    public function setCitiesDlvr(?array $citiesDlvr = null): self
    {
        // validation for constraint: array
        if ('' !== ($citiesDlvrArrayErrorMessage = self::validateCitiesDlvrForArrayConstraintFromSetCitiesDlvr($citiesDlvr))) {
            throw new \InvalidArgumentException($citiesDlvrArrayErrorMessage, __LINE__);
        }
        $this->CitiesDlvr = $citiesDlvr;

        return $this;
    }

    /**
     * Add item to CitiesDlvr value
     *
     * @throws \InvalidArgumentException
     */
    public function addToCitiesDlvr(CityObject $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof CityObject) {
            throw new \InvalidArgumentException(sprintf('The CitiesDlvr property can only contain items of type \Scraper\ScraperColisPrive\StructType\CityObject, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->CitiesDlvr[] = $item;

        return $this;
    }

    /**
     * Get CmpyPclCode value
     */
    public function getCmpyPclCode(): ?string
    {
        return $this->CmpyPclCode;
    }

    /**
     * Set CmpyPclCode value
     */
    public function setCmpyPclCode(?string $cmpyPclCode = null): self
    {
        // validation for constraint: string
        if (null !== $cmpyPclCode && !\is_string($cmpyPclCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cmpyPclCode, true), \gettype($cmpyPclCode)), __LINE__);
        }
        $this->CmpyPclCode = $cmpyPclCode;

        return $this;
    }
}
