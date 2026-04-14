<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupPointObject StructType
 */
#[\AllowDynamicProperties]
class PickupPointObject extends AbstractStructBase
{
    /**
     * The PckCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PckCode = null;
    /**
     * The PckName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PckName = null;
    /**
     * The PckAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?AddressObject $PckAdd = null;
    /**
     * The PckPict
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PckPict = null;
    /**
     * The PckLocHints
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PckLocHints = null;
    /**
     * The PckMonHrs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PckMonHrs = null;
    /**
     * The PckTueHrs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PckTueHrs = null;
    /**
     * The PckWedHrs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PckWedHrs = null;
    /**
     * The PckThuHrs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PckThuHrs = null;
    /**
     * The PckFriHrs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PckFriHrs = null;
    /**
     * The PckSatHrs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PckSatHrs = null;
    /**
     * The PckSunHrs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PckSunHrs = null;

    /**
     * Constructor method for PickupPointObject
     *
     * @uses PickupPointObject::setPckCode()
     * @uses PickupPointObject::setPckName()
     * @uses PickupPointObject::setPckAdd()
     * @uses PickupPointObject::setPckPict()
     * @uses PickupPointObject::setPckLocHints()
     * @uses PickupPointObject::setPckMonHrs()
     * @uses PickupPointObject::setPckTueHrs()
     * @uses PickupPointObject::setPckWedHrs()
     * @uses PickupPointObject::setPckThuHrs()
     * @uses PickupPointObject::setPckFriHrs()
     * @uses PickupPointObject::setPckSatHrs()
     * @uses PickupPointObject::setPckSunHrs()
     */
    public function __construct(?string $pckCode = null, ?string $pckName = null, ?AddressObject $pckAdd = null, ?string $pckPict = null, ?string $pckLocHints = null, ?string $pckMonHrs = null, ?string $pckTueHrs = null, ?string $pckWedHrs = null, ?string $pckThuHrs = null, ?string $pckFriHrs = null, ?string $pckSatHrs = null, ?string $pckSunHrs = null)
    {
        $this
            ->setPckCode($pckCode)
            ->setPckName($pckName)
            ->setPckAdd($pckAdd)
            ->setPckPict($pckPict)
            ->setPckLocHints($pckLocHints)
            ->setPckMonHrs($pckMonHrs)
            ->setPckTueHrs($pckTueHrs)
            ->setPckWedHrs($pckWedHrs)
            ->setPckThuHrs($pckThuHrs)
            ->setPckFriHrs($pckFriHrs)
            ->setPckSatHrs($pckSatHrs)
            ->setPckSunHrs($pckSunHrs)
        ;
    }

    /**
     * Get PckCode value
     */
    public function getPckCode(): ?string
    {
        return $this->PckCode;
    }

    /**
     * Set PckCode value
     */
    public function setPckCode(?string $pckCode = null): self
    {
        // validation for constraint: string
        if (null !== $pckCode && !\is_string($pckCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckCode, true), \gettype($pckCode)), __LINE__);
        }
        $this->PckCode = $pckCode;

        return $this;
    }

    /**
     * Get PckName value
     */
    public function getPckName(): ?string
    {
        return $this->PckName;
    }

    /**
     * Set PckName value
     */
    public function setPckName(?string $pckName = null): self
    {
        // validation for constraint: string
        if (null !== $pckName && !\is_string($pckName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckName, true), \gettype($pckName)), __LINE__);
        }
        $this->PckName = $pckName;

        return $this;
    }

    /**
     * Get PckAdd value
     */
    public function getPckAdd(): ?AddressObject
    {
        return $this->PckAdd;
    }

    /**
     * Set PckAdd value
     */
    public function setPckAdd(?AddressObject $pckAdd = null): self
    {
        $this->PckAdd = $pckAdd;

        return $this;
    }

    /**
     * Get PckPict value
     */
    public function getPckPict(): ?string
    {
        return $this->PckPict;
    }

    /**
     * Set PckPict value
     */
    public function setPckPict(?string $pckPict = null): self
    {
        // validation for constraint: string
        if (null !== $pckPict && !\is_string($pckPict)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckPict, true), \gettype($pckPict)), __LINE__);
        }
        $this->PckPict = $pckPict;

        return $this;
    }

    /**
     * Get PckLocHints value
     */
    public function getPckLocHints(): ?string
    {
        return $this->PckLocHints;
    }

    /**
     * Set PckLocHints value
     */
    public function setPckLocHints(?string $pckLocHints = null): self
    {
        // validation for constraint: string
        if (null !== $pckLocHints && !\is_string($pckLocHints)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckLocHints, true), \gettype($pckLocHints)), __LINE__);
        }
        $this->PckLocHints = $pckLocHints;

        return $this;
    }

    /**
     * Get PckMonHrs value
     */
    public function getPckMonHrs(): ?string
    {
        return $this->PckMonHrs;
    }

    /**
     * Set PckMonHrs value
     */
    public function setPckMonHrs(?string $pckMonHrs = null): self
    {
        // validation for constraint: string
        if (null !== $pckMonHrs && !\is_string($pckMonHrs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckMonHrs, true), \gettype($pckMonHrs)), __LINE__);
        }
        $this->PckMonHrs = $pckMonHrs;

        return $this;
    }

    /**
     * Get PckTueHrs value
     */
    public function getPckTueHrs(): ?string
    {
        return $this->PckTueHrs;
    }

    /**
     * Set PckTueHrs value
     */
    public function setPckTueHrs(?string $pckTueHrs = null): self
    {
        // validation for constraint: string
        if (null !== $pckTueHrs && !\is_string($pckTueHrs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckTueHrs, true), \gettype($pckTueHrs)), __LINE__);
        }
        $this->PckTueHrs = $pckTueHrs;

        return $this;
    }

    /**
     * Get PckWedHrs value
     */
    public function getPckWedHrs(): ?string
    {
        return $this->PckWedHrs;
    }

    /**
     * Set PckWedHrs value
     */
    public function setPckWedHrs(?string $pckWedHrs = null): self
    {
        // validation for constraint: string
        if (null !== $pckWedHrs && !\is_string($pckWedHrs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckWedHrs, true), \gettype($pckWedHrs)), __LINE__);
        }
        $this->PckWedHrs = $pckWedHrs;

        return $this;
    }

    /**
     * Get PckThuHrs value
     */
    public function getPckThuHrs(): ?string
    {
        return $this->PckThuHrs;
    }

    /**
     * Set PckThuHrs value
     */
    public function setPckThuHrs(?string $pckThuHrs = null): self
    {
        // validation for constraint: string
        if (null !== $pckThuHrs && !\is_string($pckThuHrs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckThuHrs, true), \gettype($pckThuHrs)), __LINE__);
        }
        $this->PckThuHrs = $pckThuHrs;

        return $this;
    }

    /**
     * Get PckFriHrs value
     */
    public function getPckFriHrs(): ?string
    {
        return $this->PckFriHrs;
    }

    /**
     * Set PckFriHrs value
     */
    public function setPckFriHrs(?string $pckFriHrs = null): self
    {
        // validation for constraint: string
        if (null !== $pckFriHrs && !\is_string($pckFriHrs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckFriHrs, true), \gettype($pckFriHrs)), __LINE__);
        }
        $this->PckFriHrs = $pckFriHrs;

        return $this;
    }

    /**
     * Get PckSatHrs value
     */
    public function getPckSatHrs(): ?string
    {
        return $this->PckSatHrs;
    }

    /**
     * Set PckSatHrs value
     */
    public function setPckSatHrs(?string $pckSatHrs = null): self
    {
        // validation for constraint: string
        if (null !== $pckSatHrs && !\is_string($pckSatHrs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckSatHrs, true), \gettype($pckSatHrs)), __LINE__);
        }
        $this->PckSatHrs = $pckSatHrs;

        return $this;
    }

    /**
     * Get PckSunHrs value
     */
    public function getPckSunHrs(): ?string
    {
        return $this->PckSunHrs;
    }

    /**
     * Set PckSunHrs value
     */
    public function setPckSunHrs(?string $pckSunHrs = null): self
    {
        // validation for constraint: string
        if (null !== $pckSunHrs && !\is_string($pckSunHrs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckSunHrs, true), \gettype($pckSunHrs)), __LINE__);
        }
        $this->PckSunHrs = $pckSunHrs;

        return $this;
    }
}
