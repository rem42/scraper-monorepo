<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LightParcelObject StructType
 */
#[\AllowDynamicProperties]
class LightParcelObject extends AbstractStructBase
{
    /**
     * The PclWeight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $PclWeight;
    /**
     * The ChargeAmnt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected float $ChargeAmnt;
    /**
     * The CPPrdCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CPPrdCode = null;
    /**
     * The CPPclCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $CPPclCode;
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $OrderID;
    /**
     * The DlvrName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $DlvrName;
    /**
     * The PclAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?AddressObject $PclAdd;
    /**
     * The PclShipDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $PclShipDate;

    /**
     * Constructor method for LightParcelObject
     *
     * @uses LightParcelObject::setPclWeight()
     * @uses LightParcelObject::setChargeAmnt()
     * @uses LightParcelObject::setCPPrdCode()
     * @uses LightParcelObject::setCPPclCode()
     * @uses LightParcelObject::setOrderID()
     * @uses LightParcelObject::setDlvrName()
     * @uses LightParcelObject::setPclAdd()
     * @uses LightParcelObject::setPclShipDate()
     */
    public function __construct(int $pclWeight, float $chargeAmnt, ?string $cPPrdCode = null, ?string $cPPclCode, ?string $orderID, ?string $dlvrName, ?AddressObject $pclAdd, ?string $pclShipDate)
    {
        $this
            ->setPclWeight($pclWeight)
            ->setChargeAmnt($chargeAmnt)
            ->setCPPrdCode($cPPrdCode)
            ->setCPPclCode($cPPclCode)
            ->setOrderID($orderID)
            ->setDlvrName($dlvrName)
            ->setPclAdd($pclAdd)
            ->setPclShipDate($pclShipDate)
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
     * Get DlvrName value
     */
    public function getDlvrName(): string
    {
        return $this->DlvrName;
    }

    /**
     * Set DlvrName value
     */
    public function setDlvrName(?string $dlvrName): self
    {
        // validation for constraint: string
        if (null !== $dlvrName && !\is_string($dlvrName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrName, true), \gettype($dlvrName)), __LINE__);
        }
        $this->DlvrName = $dlvrName;

        return $this;
    }

    /**
     * Get PclAdd value
     */
    public function getPclAdd(): AddressObject
    {
        return $this->PclAdd;
    }

    /**
     * Set PclAdd value
     */
    public function setPclAdd(?AddressObject $pclAdd): self
    {
        $this->PclAdd = $pclAdd;

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
}
