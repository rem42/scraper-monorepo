<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryAddressObject StructType
 */
#[\AllowDynamicProperties]
class DeliveryAddressObject extends AbstractStructBase
{
    /**
     * The DlvrEmail
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DlvrEmail = null;
    /**
     * The DlvrPhon
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DlvrPhon = null;
    /**
     * The DlvrGsm
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DlvrGsm = null;
    /**
     * The DlvrDCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DlvrDCode = null;
    /**
     * The DlvrComments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DlvrComments = null;
    /**
     * The DlvrLng
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DlvrLng = null;
    /**
     * The DlvrCurrency
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DlvrCurrency = null;
    /**
     * The DlvrName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $DlvrName;
    /**
     * The DlvrAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?AddressObject $DlvrAddress;

    /**
     * Constructor method for DeliveryAddressObject
     *
     * @uses DeliveryAddressObject::setDlvrEmail()
     * @uses DeliveryAddressObject::setDlvrPhon()
     * @uses DeliveryAddressObject::setDlvrGsm()
     * @uses DeliveryAddressObject::setDlvrDCode()
     * @uses DeliveryAddressObject::setDlvrComments()
     * @uses DeliveryAddressObject::setDlvrLng()
     * @uses DeliveryAddressObject::setDlvrCurrency()
     * @uses DeliveryAddressObject::setDlvrName()
     * @uses DeliveryAddressObject::setDlvrAddress()
     */
    public function __construct(
        ?string $dlvrEmail,
        ?string $dlvrPhon,
        ?string $dlvrGsm,
        ?string $dlvrDCode,
        ?string $dlvrComments,
        ?string $dlvrLng,
        ?string $dlvrCurrency,
        ?string $dlvrName,
        ?AddressObject $dlvrAddress
    ) {
        $this
            ->setDlvrEmail($dlvrEmail)
            ->setDlvrPhon($dlvrPhon)
            ->setDlvrGsm($dlvrGsm)
            ->setDlvrDCode($dlvrDCode)
            ->setDlvrComments($dlvrComments)
            ->setDlvrLng($dlvrLng)
            ->setDlvrCurrency($dlvrCurrency)
            ->setDlvrName($dlvrName)
            ->setDlvrAddress($dlvrAddress)
        ;
    }

    /**
     * Get DlvrEmail value
     */
    public function getDlvrEmail(): ?string
    {
        return $this->DlvrEmail;
    }

    /**
     * Set DlvrEmail value
     */
    public function setDlvrEmail(?string $dlvrEmail = null): self
    {
        // validation for constraint: string
        if (null !== $dlvrEmail && !\is_string($dlvrEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrEmail, true), \gettype($dlvrEmail)), __LINE__);
        }
        $this->DlvrEmail = $dlvrEmail;

        return $this;
    }

    /**
     * Get DlvrPhon value
     */
    public function getDlvrPhon(): ?string
    {
        return $this->DlvrPhon;
    }

    /**
     * Set DlvrPhon value
     */
    public function setDlvrPhon(?string $dlvrPhon = null): self
    {
        // validation for constraint: string
        if (null !== $dlvrPhon && !\is_string($dlvrPhon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrPhon, true), \gettype($dlvrPhon)), __LINE__);
        }
        $this->DlvrPhon = $dlvrPhon;

        return $this;
    }

    /**
     * Get DlvrGsm value
     */
    public function getDlvrGsm(): ?string
    {
        return $this->DlvrGsm;
    }

    /**
     * Set DlvrGsm value
     */
    public function setDlvrGsm(?string $dlvrGsm = null): self
    {
        // validation for constraint: string
        if (null !== $dlvrGsm && !\is_string($dlvrGsm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrGsm, true), \gettype($dlvrGsm)), __LINE__);
        }
        $this->DlvrGsm = $dlvrGsm;

        return $this;
    }

    /**
     * Get DlvrDCode value
     */
    public function getDlvrDCode(): ?string
    {
        return $this->DlvrDCode;
    }

    /**
     * Set DlvrDCode value
     */
    public function setDlvrDCode(?string $dlvrDCode = null): self
    {
        // validation for constraint: string
        if (null !== $dlvrDCode && !\is_string($dlvrDCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrDCode, true), \gettype($dlvrDCode)), __LINE__);
        }
        $this->DlvrDCode = $dlvrDCode;

        return $this;
    }

    /**
     * Get DlvrComments value
     */
    public function getDlvrComments(): ?string
    {
        return $this->DlvrComments;
    }

    /**
     * Set DlvrComments value
     */
    public function setDlvrComments(?string $dlvrComments = null): self
    {
        // validation for constraint: string
        if (null !== $dlvrComments && !\is_string($dlvrComments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrComments, true), \gettype($dlvrComments)), __LINE__);
        }
        $this->DlvrComments = $dlvrComments;

        return $this;
    }

    /**
     * Get DlvrLng value
     */
    public function getDlvrLng(): ?string
    {
        return $this->DlvrLng;
    }

    /**
     * Set DlvrLng value
     */
    public function setDlvrLng(?string $dlvrLng = null): self
    {
        // validation for constraint: string
        if (null !== $dlvrLng && !\is_string($dlvrLng)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrLng, true), \gettype($dlvrLng)), __LINE__);
        }
        $this->DlvrLng = $dlvrLng;

        return $this;
    }

    /**
     * Get DlvrCurrency value
     */
    public function getDlvrCurrency(): ?string
    {
        return $this->DlvrCurrency;
    }

    /**
     * Set DlvrCurrency value
     */
    public function setDlvrCurrency(?string $dlvrCurrency = null): self
    {
        // validation for constraint: string
        if (null !== $dlvrCurrency && !\is_string($dlvrCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrCurrency, true), \gettype($dlvrCurrency)), __LINE__);
        }
        $this->DlvrCurrency = $dlvrCurrency;

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
     * Get DlvrAddress value
     */
    public function getDlvrAddress(): AddressObject
    {
        return $this->DlvrAddress;
    }

    /**
     * Set DlvrAddress value
     */
    public function setDlvrAddress(?AddressObject $dlvrAddress): self
    {
        $this->DlvrAddress = $dlvrAddress;

        return $this;
    }
}
