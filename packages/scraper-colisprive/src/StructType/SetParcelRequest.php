<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetParcelRequest StructType
 */
#[\AllowDynamicProperties]
class SetParcelRequest extends AbstractStructBase
{
    /**
     * The PclWeight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $PclWeight;
    /**
     * The IsPclWithPOD
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $IsPclWithPOD;
    /**
     * The LabelFormat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $LabelFormat;
    /**
     * The IsAdValorem
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $IsAdValorem;
    /**
     * The SubAcc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $SubAcc = null;
    /**
     * The AutoPrintPDF
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $AutoPrintPDF = null;
    /**
     * The CntrCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CntrCode = null;
    /**
     * The DestType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DestType = null;
    /**
     * The DestName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DestName = null;
    /**
     * The SendType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $SendType = null;
    /**
     * The SendName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $SendName = null;
    /**
     * The CodeHub
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CodeHub = null;
    /**
     * The SndZC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $SndZC = null;
    /**
     * The HLQ
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $HLQ = null;
    /**
     * The Brand
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Brand = null;
    /**
     * The TimeInfos
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     *
     * @var array<\Scraper\ScraperColisPrive\StructType\TimeInfosObject>
     */
    protected ?array $TimeInfos = null;
    /**
     * The SecurityID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?IdentificationObject $SecurityID;
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $OrderID;
    /**
     * The CltNum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $CltNum;
    /**
     * The CsgAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?DeliveryAddressObject $CsgAdd;
    /**
     * The PclShipDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $PclShipDate;
    /**
     * The ChargeAmnt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?float $ChargeAmnt;
    /**
     * The ValueAmnt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?float $ValueAmnt;
    /**
     * The PclHeight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?int $PclHeight;
    /**
     * The PclWidth
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?int $PclWidth;
    /**
     * The PclLength
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?int $PclLength;

    /**
     * Constructor method for SetParcelRequest
     *
     * @uses SetParcelRequest::setPclWeight()
     * @uses SetParcelRequest::setIsPclWithPOD()
     * @uses SetParcelRequest::setLabelFormat()
     * @uses SetParcelRequest::setIsAdValorem()
     * @uses SetParcelRequest::setSubAcc()
     * @uses SetParcelRequest::setAutoPrintPDF()
     * @uses SetParcelRequest::setCntrCode()
     * @uses SetParcelRequest::setDestType()
     * @uses SetParcelRequest::setDestName()
     * @uses SetParcelRequest::setSendType()
     * @uses SetParcelRequest::setSendName()
     * @uses SetParcelRequest::setCodeHub()
     * @uses SetParcelRequest::setSndZC()
     * @uses SetParcelRequest::setHLQ()
     * @uses SetParcelRequest::setBrand()
     * @uses SetParcelRequest::setTimeInfos()
     * @uses SetParcelRequest::setSecurityID()
     * @uses SetParcelRequest::setOrderID()
     * @uses SetParcelRequest::setCltNum()
     * @uses SetParcelRequest::setCsgAdd()
     * @uses SetParcelRequest::setPclShipDate()
     * @uses SetParcelRequest::setChargeAmnt()
     * @uses SetParcelRequest::setValueAmnt()
     * @uses SetParcelRequest::setPclHeight()
     * @uses SetParcelRequest::setPclWidth()
     * @uses SetParcelRequest::setPclLength()
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\TimeInfosObject> $timeInfos
     */
    public function __construct(
        int $pclWeight,
        bool $isPclWithPOD,
        string $labelFormat,
        bool $isAdValorem,
        ?string $subAcc,
        ?string $autoPrintPDF,
        ?string $cntrCode,
        ?string $destType,
        ?string $destName,
        ?string $sendType,
        ?string $sendName,
        ?string $codeHub,
        ?string $sndZC,
        ?string $hLQ,
        ?string $brand,
        ?array $timeInfos,
        ?IdentificationObject $securityID,
        ?string $orderID,
        ?string $cltNum,
        ?DeliveryAddressObject $csgAdd,
        ?string $pclShipDate,
        ?float $chargeAmnt,
        ?float $valueAmnt,
        ?int $pclHeight,
        ?int $pclWidth,
        ?int $pclLength
    ) {
        $this
            ->setPclWeight($pclWeight)
            ->setIsPclWithPOD($isPclWithPOD)
            ->setLabelFormat($labelFormat)
            ->setIsAdValorem($isAdValorem)
            ->setSubAcc($subAcc)
            ->setAutoPrintPDF($autoPrintPDF)
            ->setCntrCode($cntrCode)
            ->setDestType($destType)
            ->setDestName($destName)
            ->setSendType($sendType)
            ->setSendName($sendName)
            ->setCodeHub($codeHub)
            ->setSndZC($sndZC)
            ->setHLQ($hLQ)
            ->setBrand($brand)
            ->setTimeInfos($timeInfos)
            ->setSecurityID($securityID)
            ->setOrderID($orderID)
            ->setCltNum($cltNum)
            ->setCsgAdd($csgAdd)
            ->setPclShipDate($pclShipDate)
            ->setChargeAmnt($chargeAmnt)
            ->setValueAmnt($valueAmnt)
            ->setPclHeight($pclHeight)
            ->setPclWidth($pclWidth)
            ->setPclLength($pclLength)
        ;
    }

    /**
     * Get PclWeight value
     */
    public function getPclWeight(): int
    {
        return $this->PclWeight;
    }

    /**
     * Set PclWeight value
     */
    public function setPclWeight(int $pclWeight): self
    {
        // validation for constraint: int
        if (null !== $pclWeight && !(\is_int($pclWeight) || ctype_digit($pclWeight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pclWeight, true), \gettype($pclWeight)), __LINE__);
        }
        $this->PclWeight = $pclWeight;

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
     * Get IsAdValorem value
     */
    public function getIsAdValorem(): bool
    {
        return $this->IsAdValorem;
    }

    /**
     * Set IsAdValorem value
     */
    public function setIsAdValorem(bool $isAdValorem): self
    {
        // validation for constraint: boolean
        if (null !== $isAdValorem && !\is_bool($isAdValorem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isAdValorem, true), \gettype($isAdValorem)), __LINE__);
        }
        $this->IsAdValorem = $isAdValorem;

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
     * Get AutoPrintPDF value
     */
    public function getAutoPrintPDF(): ?string
    {
        return $this->AutoPrintPDF;
    }

    /**
     * Set AutoPrintPDF value
     */
    public function setAutoPrintPDF(?string $autoPrintPDF = null): self
    {
        // validation for constraint: string
        if (null !== $autoPrintPDF && !\is_string($autoPrintPDF)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autoPrintPDF, true), \gettype($autoPrintPDF)), __LINE__);
        }
        $this->AutoPrintPDF = $autoPrintPDF;

        return $this;
    }

    /**
     * Get CntrCode value
     */
    public function getCntrCode(): ?string
    {
        return $this->CntrCode;
    }

    /**
     * Set CntrCode value
     */
    public function setCntrCode(?string $cntrCode = null): self
    {
        // validation for constraint: string
        if (null !== $cntrCode && !\is_string($cntrCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cntrCode, true), \gettype($cntrCode)), __LINE__);
        }
        $this->CntrCode = $cntrCode;

        return $this;
    }

    /**
     * Get DestType value
     */
    public function getDestType(): ?string
    {
        return $this->DestType;
    }

    /**
     * Set DestType value
     */
    public function setDestType(?string $destType = null): self
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
    public function getDestName(): ?string
    {
        return $this->DestName;
    }

    /**
     * Set DestName value
     */
    public function setDestName(?string $destName = null): self
    {
        // validation for constraint: string
        if (null !== $destName && !\is_string($destName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destName, true), \gettype($destName)), __LINE__);
        }
        $this->DestName = $destName;

        return $this;
    }

    /**
     * Get SendType value
     */
    public function getSendType(): ?string
    {
        return $this->SendType;
    }

    /**
     * Set SendType value
     */
    public function setSendType(?string $sendType = null): self
    {
        // validation for constraint: string
        if (null !== $sendType && !\is_string($sendType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sendType, true), \gettype($sendType)), __LINE__);
        }
        $this->SendType = $sendType;

        return $this;
    }

    /**
     * Get SendName value
     */
    public function getSendName(): ?string
    {
        return $this->SendName;
    }

    /**
     * Set SendName value
     */
    public function setSendName(?string $sendName = null): self
    {
        // validation for constraint: string
        if (null !== $sendName && !\is_string($sendName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sendName, true), \gettype($sendName)), __LINE__);
        }
        $this->SendName = $sendName;

        return $this;
    }

    /**
     * Get CodeHub value
     */
    public function getCodeHub(): ?string
    {
        return $this->CodeHub;
    }

    /**
     * Set CodeHub value
     */
    public function setCodeHub(?string $codeHub = null): self
    {
        // validation for constraint: string
        if (null !== $codeHub && !\is_string($codeHub)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeHub, true), \gettype($codeHub)), __LINE__);
        }
        $this->CodeHub = $codeHub;

        return $this;
    }

    /**
     * Get SndZC value
     */
    public function getSndZC(): ?string
    {
        return $this->SndZC;
    }

    /**
     * Set SndZC value
     */
    public function setSndZC(?string $sndZC = null): self
    {
        // validation for constraint: string
        if (null !== $sndZC && !\is_string($sndZC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sndZC, true), \gettype($sndZC)), __LINE__);
        }
        $this->SndZC = $sndZC;

        return $this;
    }

    /**
     * Get HLQ value
     */
    public function getHLQ(): ?string
    {
        return $this->HLQ;
    }

    /**
     * Set HLQ value
     */
    public function setHLQ(?string $hLQ = null): self
    {
        // validation for constraint: string
        if (null !== $hLQ && !\is_string($hLQ)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hLQ, true), \gettype($hLQ)), __LINE__);
        }
        $this->HLQ = $hLQ;

        return $this;
    }

    /**
     * Get Brand value
     */
    public function getBrand(): ?string
    {
        return $this->Brand;
    }

    /**
     * Set Brand value
     */
    public function setBrand(?string $brand = null): self
    {
        // validation for constraint: string
        if (null !== $brand && !\is_string($brand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brand, true), \gettype($brand)), __LINE__);
        }
        $this->Brand = $brand;

        return $this;
    }

    /**
     * Get TimeInfos value
     *
     * @return array<\Scraper\ScraperColisPrive\StructType\TimeInfosObject>
     */
    public function getTimeInfos(): ?array
    {
        return $this->TimeInfos;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setTimeInfos method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTimeInfos method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTimeInfosForArrayConstraintFromSetTimeInfos(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $setParcelRequestTimeInfosItem) {
            // validation for constraint: itemType
            if (!$setParcelRequestTimeInfosItem instanceof TimeInfosObject) {
                $invalidValues[] = \is_object($setParcelRequestTimeInfosItem) ? $setParcelRequestTimeInfosItem::class : sprintf('%s(%s)', \gettype($setParcelRequestTimeInfosItem), var_export($setParcelRequestTimeInfosItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The TimeInfos property can only contain items of type \Scraper\ScraperColisPrive\StructType\TimeInfosObject, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set TimeInfos value
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\TimeInfosObject> $timeInfos
     *
     * @throws \InvalidArgumentException
     */
    public function setTimeInfos(?array $timeInfos = null): self
    {
        // validation for constraint: array
        if ('' !== ($timeInfosArrayErrorMessage = self::validateTimeInfosForArrayConstraintFromSetTimeInfos($timeInfos))) {
            throw new \InvalidArgumentException($timeInfosArrayErrorMessage, __LINE__);
        }
        $this->TimeInfos = $timeInfos;

        return $this;
    }

    /**
     * Add item to TimeInfos value
     *
     * @throws \InvalidArgumentException
     */
    public function addToTimeInfos(TimeInfosObject $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof TimeInfosObject) {
            throw new \InvalidArgumentException(sprintf('The TimeInfos property can only contain items of type \Scraper\ScraperColisPrive\StructType\TimeInfosObject, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->TimeInfos[] = $item;

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
     * Get OrderID value
     */
    public function getOrderID(): string
    {
        return $this->OrderID;
    }

    /**
     * Set OrderID value
     */
    public function setOrderID(?string $orderID): self
    {
        // validation for constraint: string
        if (null !== $orderID && !\is_string($orderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderID, true), \gettype($orderID)), __LINE__);
        }
        $this->OrderID = $orderID;

        return $this;
    }

    /**
     * Get CltNum value
     */
    public function getCltNum(): string
    {
        return $this->CltNum;
    }

    /**
     * Set CltNum value
     */
    public function setCltNum(?string $cltNum): self
    {
        // validation for constraint: string
        if (null !== $cltNum && !\is_string($cltNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cltNum, true), \gettype($cltNum)), __LINE__);
        }
        $this->CltNum = $cltNum;

        return $this;
    }

    /**
     * Get CsgAdd value
     */
    public function getCsgAdd(): DeliveryAddressObject
    {
        return $this->CsgAdd;
    }

    /**
     * Set CsgAdd value
     */
    public function setCsgAdd(?DeliveryAddressObject $csgAdd): self
    {
        $this->CsgAdd = $csgAdd;

        return $this;
    }

    /**
     * Get PclShipDate value
     */
    public function getPclShipDate(): string
    {
        return $this->PclShipDate;
    }

    /**
     * Set PclShipDate value
     */
    public function setPclShipDate(?string $pclShipDate): self
    {
        // validation for constraint: string
        if (null !== $pclShipDate && !\is_string($pclShipDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pclShipDate, true), \gettype($pclShipDate)), __LINE__);
        }
        $this->PclShipDate = $pclShipDate;

        return $this;
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
    public function setChargeAmnt(?float $chargeAmnt): self
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
    public function setValueAmnt(?float $valueAmnt): self
    {
        // validation for constraint: float
        if (null !== $valueAmnt && !(\is_float($valueAmnt) || is_numeric($valueAmnt))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valueAmnt, true), \gettype($valueAmnt)), __LINE__);
        }
        $this->ValueAmnt = $valueAmnt;

        return $this;
    }

    /**
     * Get PclHeight value
     */
    public function getPclHeight(): int
    {
        return $this->PclHeight;
    }

    /**
     * Set PclHeight value
     */
    public function setPclHeight(?int $pclHeight): self
    {
        // validation for constraint: int
        if (null !== $pclHeight && !(\is_int($pclHeight) || ctype_digit($pclHeight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pclHeight, true), \gettype($pclHeight)), __LINE__);
        }
        $this->PclHeight = $pclHeight;

        return $this;
    }

    /**
     * Get PclWidth value
     */
    public function getPclWidth(): int
    {
        return $this->PclWidth;
    }

    /**
     * Set PclWidth value
     */
    public function setPclWidth(?int $pclWidth): self
    {
        // validation for constraint: int
        if (null !== $pclWidth && !(\is_int($pclWidth) || ctype_digit($pclWidth))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pclWidth, true), \gettype($pclWidth)), __LINE__);
        }
        $this->PclWidth = $pclWidth;

        return $this;
    }

    /**
     * Get PclLength value
     */
    public function getPclLength(): int
    {
        return $this->PclLength;
    }

    /**
     * Set PclLength value
     */
    public function setPclLength(?int $pclLength): self
    {
        // validation for constraint: int
        if (null !== $pclLength && !(\is_int($pclLength) || ctype_digit($pclLength))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pclLength, true), \gettype($pclLength)), __LINE__);
        }
        $this->PclLength = $pclLength;

        return $this;
    }
}
