<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetParcelReturn StructType
 */
#[\AllowDynamicProperties]
class SetParcelReturn extends AbstractStructBase
{
    /**
     * The LabelType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $LabelType;
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
     * The OrderID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $OrderID = null;
    /**
     * The LabelUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $LabelUrl = null;
    /**
     * The LabelZpl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $LabelZpl = null;
    /**
     * The RegOffCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $RegOffCode = null;
    /**
     * The RoundCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $RoundCode = null;
    /**
     * The CarrCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CarrCode = null;
    /**
     * The CABCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CABCode = null;
    /**
     * The ZC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ZC = null;
    /**
     * The TNTAcnt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TNTAcnt = null;
    /**
     * The TNTCab
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TNTCab = null;
    /**
     * The TNTDept
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TNTDept = null;
    /**
     * The TNTPrd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TNTPrd = null;
    /**
     * The TNTVer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TNTVer = null;
    /**
     * The TNTComment1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TNTComment1 = null;
    /**
     * The TNTComment2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TNTComment2 = null;
    /**
     * The TNTComment3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TNTComment3 = null;
    /**
     * The TNTComment4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TNTComment4 = null;
    /**
     * The CLPAcnt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CLPAcnt = null;
    /**
     * The CLPFlwCab
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CLPFlwCab = null;
    /**
     * The CLPFlwCabPrt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CLPFlwCabPrt = null;
    /**
     * The CLPPCHCab
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CLPPCHCab = null;
    /**
     * The CLPPCHCabPrt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CLPPCHCabPrt = null;
    /**
     * The CLPSort
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CLPSort = null;
    /**
     * The CLPPFCSite
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CLPPFCSite = null;
    /**
     * The RefCab
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $RefCab = null;
    /**
     * The DestRefExt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DestRefExt = null;
    /**
     * The DestRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DestRef = null;
    /**
     * The DestAddr
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DestAddr = null;
    /**
     * The DestZip
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DestZip = null;
    /**
     * The DestCity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DestCity = null;
    /**
     * The MRCAB
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $MRCAB = null;
    /**
     * The MRAgency
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $MRAgency = null;
    /**
     * The MRRoundCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $MRRoundCode = null;
    /**
     * The MRRefPudo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $MRRefPudo = null;
    /**
     * The MRPreTri
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $MRPreTri = null;
    /**
     * The MRLibPfd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $MRLibPfd = null;
    /**
     * The MRNoGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $MRNoGroup = null;
    /**
     * The MRNumExpe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $MRNumExpe = null;

    /**
     * Constructor method for SetParcelReturn
     *
     * @uses SetParcelReturn::setLabelType()
     * @uses SetParcelReturn::setWSResp()
     * @uses SetParcelReturn::setCPPclCode()
     * @uses SetParcelReturn::setOrderID()
     * @uses SetParcelReturn::setLabelUrl()
     * @uses SetParcelReturn::setLabelZpl()
     * @uses SetParcelReturn::setRegOffCode()
     * @uses SetParcelReturn::setRoundCode()
     * @uses SetParcelReturn::setCarrCode()
     * @uses SetParcelReturn::setCABCode()
     * @uses SetParcelReturn::setZC()
     * @uses SetParcelReturn::setTNTAcnt()
     * @uses SetParcelReturn::setTNTCab()
     * @uses SetParcelReturn::setTNTDept()
     * @uses SetParcelReturn::setTNTPrd()
     * @uses SetParcelReturn::setTNTVer()
     * @uses SetParcelReturn::setTNTComment1()
     * @uses SetParcelReturn::setTNTComment2()
     * @uses SetParcelReturn::setTNTComment3()
     * @uses SetParcelReturn::setTNTComment4()
     * @uses SetParcelReturn::setCLPAcnt()
     * @uses SetParcelReturn::setCLPFlwCab()
     * @uses SetParcelReturn::setCLPFlwCabPrt()
     * @uses SetParcelReturn::setCLPPCHCab()
     * @uses SetParcelReturn::setCLPPCHCabPrt()
     * @uses SetParcelReturn::setCLPSort()
     * @uses SetParcelReturn::setCLPPFCSite()
     * @uses SetParcelReturn::setRefCab()
     * @uses SetParcelReturn::setDestRefExt()
     * @uses SetParcelReturn::setDestRef()
     * @uses SetParcelReturn::setDestAddr()
     * @uses SetParcelReturn::setDestZip()
     * @uses SetParcelReturn::setDestCity()
     * @uses SetParcelReturn::setMRCAB()
     * @uses SetParcelReturn::setMRAgency()
     * @uses SetParcelReturn::setMRRoundCode()
     * @uses SetParcelReturn::setMRRefPudo()
     * @uses SetParcelReturn::setMRPreTri()
     * @uses SetParcelReturn::setMRLibPfd()
     * @uses SetParcelReturn::setMRNoGroup()
     * @uses SetParcelReturn::setMRNumExpe()
     */
    public function __construct(string $labelType, ?ResponseObject $wSResp = null, ?string $cPPclCode = null, ?string $orderID = null, ?string $labelUrl = null, ?string $labelZpl = null, ?string $regOffCode = null, ?string $roundCode = null, ?string $carrCode = null, ?string $cABCode = null, ?string $zC = null, ?string $tNTAcnt = null, ?string $tNTCab = null, ?string $tNTDept = null, ?string $tNTPrd = null, ?string $tNTVer = null, ?string $tNTComment1 = null, ?string $tNTComment2 = null, ?string $tNTComment3 = null, ?string $tNTComment4 = null, ?string $cLPAcnt = null, ?string $cLPFlwCab = null, ?string $cLPFlwCabPrt = null, ?string $cLPPCHCab = null, ?string $cLPPCHCabPrt = null, ?string $cLPSort = null, ?string $cLPPFCSite = null, ?string $refCab = null, ?string $destRefExt = null, ?string $destRef = null, ?string $destAddr = null, ?string $destZip = null, ?string $destCity = null, ?string $mRCAB = null, ?string $mRAgency = null, ?string $mRRoundCode = null, ?string $mRRefPudo = null, ?string $mRPreTri = null, ?string $mRLibPfd = null, ?string $mRNoGroup = null, ?string $mRNumExpe = null)
    {
        $this
            ->setLabelType($labelType)
            ->setWSResp($wSResp)
            ->setCPPclCode($cPPclCode)
            ->setOrderID($orderID)
            ->setLabelUrl($labelUrl)
            ->setLabelZpl($labelZpl)
            ->setRegOffCode($regOffCode)
            ->setRoundCode($roundCode)
            ->setCarrCode($carrCode)
            ->setCABCode($cABCode)
            ->setZC($zC)
            ->setTNTAcnt($tNTAcnt)
            ->setTNTCab($tNTCab)
            ->setTNTDept($tNTDept)
            ->setTNTPrd($tNTPrd)
            ->setTNTVer($tNTVer)
            ->setTNTComment1($tNTComment1)
            ->setTNTComment2($tNTComment2)
            ->setTNTComment3($tNTComment3)
            ->setTNTComment4($tNTComment4)
            ->setCLPAcnt($cLPAcnt)
            ->setCLPFlwCab($cLPFlwCab)
            ->setCLPFlwCabPrt($cLPFlwCabPrt)
            ->setCLPPCHCab($cLPPCHCab)
            ->setCLPPCHCabPrt($cLPPCHCabPrt)
            ->setCLPSort($cLPSort)
            ->setCLPPFCSite($cLPPFCSite)
            ->setRefCab($refCab)
            ->setDestRefExt($destRefExt)
            ->setDestRef($destRef)
            ->setDestAddr($destAddr)
            ->setDestZip($destZip)
            ->setDestCity($destCity)
            ->setMRCAB($mRCAB)
            ->setMRAgency($mRAgency)
            ->setMRRoundCode($mRRoundCode)
            ->setMRRefPudo($mRRefPudo)
            ->setMRPreTri($mRPreTri)
            ->setMRLibPfd($mRLibPfd)
            ->setMRNoGroup($mRNoGroup)
            ->setMRNumExpe($mRNumExpe)
        ;
    }

    /**
     * Get LabelType value
     */
    public function getLabelType(): string
    {
        return $this->LabelType;
    }

    /**
     * Set LabelType value
     *
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumLabelType::valueIsValid()
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumLabelType::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setLabelType(string $labelType): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperColisPrive\EnumType\EnumLabelType::valueIsValid($labelType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperColisPrive\EnumType\EnumLabelType', \is_array($labelType) ? implode(', ', $labelType) : var_export($labelType, true), implode(', ', \Scraper\ScraperColisPrive\EnumType\EnumLabelType::getValidValues())), __LINE__);
        }
        $this->LabelType = $labelType;

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
     * Get OrderID value
     */
    public function getOrderID(): ?string
    {
        return $this->OrderID;
    }

    /**
     * Set OrderID value
     */
    public function setOrderID(?string $orderID = null): self
    {
        // validation for constraint: string
        if (null !== $orderID && !\is_string($orderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderID, true), \gettype($orderID)), __LINE__);
        }
        $this->OrderID = $orderID;

        return $this;
    }

    /**
     * Get LabelUrl value
     */
    public function getLabelUrl(): ?string
    {
        return $this->LabelUrl;
    }

    /**
     * Set LabelUrl value
     */
    public function setLabelUrl(?string $labelUrl = null): self
    {
        // validation for constraint: string
        if (null !== $labelUrl && !\is_string($labelUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelUrl, true), \gettype($labelUrl)), __LINE__);
        }
        $this->LabelUrl = $labelUrl;

        return $this;
    }

    /**
     * Get LabelZpl value
     */
    public function getLabelZpl(): ?string
    {
        return $this->LabelZpl;
    }

    /**
     * Set LabelZpl value
     */
    public function setLabelZpl(?string $labelZpl = null): self
    {
        // validation for constraint: string
        if (null !== $labelZpl && !\is_string($labelZpl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelZpl, true), \gettype($labelZpl)), __LINE__);
        }
        $this->LabelZpl = $labelZpl;

        return $this;
    }

    /**
     * Get RegOffCode value
     */
    public function getRegOffCode(): ?string
    {
        return $this->RegOffCode;
    }

    /**
     * Set RegOffCode value
     */
    public function setRegOffCode(?string $regOffCode = null): self
    {
        // validation for constraint: string
        if (null !== $regOffCode && !\is_string($regOffCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regOffCode, true), \gettype($regOffCode)), __LINE__);
        }
        $this->RegOffCode = $regOffCode;

        return $this;
    }

    /**
     * Get RoundCode value
     */
    public function getRoundCode(): ?string
    {
        return $this->RoundCode;
    }

    /**
     * Set RoundCode value
     */
    public function setRoundCode(?string $roundCode = null): self
    {
        // validation for constraint: string
        if (null !== $roundCode && !\is_string($roundCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roundCode, true), \gettype($roundCode)), __LINE__);
        }
        $this->RoundCode = $roundCode;

        return $this;
    }

    /**
     * Get CarrCode value
     */
    public function getCarrCode(): ?string
    {
        return $this->CarrCode;
    }

    /**
     * Set CarrCode value
     */
    public function setCarrCode(?string $carrCode = null): self
    {
        // validation for constraint: string
        if (null !== $carrCode && !\is_string($carrCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrCode, true), \gettype($carrCode)), __LINE__);
        }
        $this->CarrCode = $carrCode;

        return $this;
    }

    /**
     * Get CABCode value
     */
    public function getCABCode(): ?string
    {
        return $this->CABCode;
    }

    /**
     * Set CABCode value
     */
    public function setCABCode(?string $cABCode = null): self
    {
        // validation for constraint: string
        if (null !== $cABCode && !\is_string($cABCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cABCode, true), \gettype($cABCode)), __LINE__);
        }
        $this->CABCode = $cABCode;

        return $this;
    }

    /**
     * Get ZC value
     */
    public function getZC(): ?string
    {
        return $this->ZC;
    }

    /**
     * Set ZC value
     */
    public function setZC(?string $zC = null): self
    {
        // validation for constraint: string
        if (null !== $zC && !\is_string($zC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zC, true), \gettype($zC)), __LINE__);
        }
        $this->ZC = $zC;

        return $this;
    }

    /**
     * Get TNTAcnt value
     */
    public function getTNTAcnt(): ?string
    {
        return $this->TNTAcnt;
    }

    /**
     * Set TNTAcnt value
     */
    public function setTNTAcnt(?string $tNTAcnt = null): self
    {
        // validation for constraint: string
        if (null !== $tNTAcnt && !\is_string($tNTAcnt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTAcnt, true), \gettype($tNTAcnt)), __LINE__);
        }
        $this->TNTAcnt = $tNTAcnt;

        return $this;
    }

    /**
     * Get TNTCab value
     */
    public function getTNTCab(): ?string
    {
        return $this->TNTCab;
    }

    /**
     * Set TNTCab value
     */
    public function setTNTCab(?string $tNTCab = null): self
    {
        // validation for constraint: string
        if (null !== $tNTCab && !\is_string($tNTCab)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTCab, true), \gettype($tNTCab)), __LINE__);
        }
        $this->TNTCab = $tNTCab;

        return $this;
    }

    /**
     * Get TNTDept value
     */
    public function getTNTDept(): ?string
    {
        return $this->TNTDept;
    }

    /**
     * Set TNTDept value
     */
    public function setTNTDept(?string $tNTDept = null): self
    {
        // validation for constraint: string
        if (null !== $tNTDept && !\is_string($tNTDept)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTDept, true), \gettype($tNTDept)), __LINE__);
        }
        $this->TNTDept = $tNTDept;

        return $this;
    }

    /**
     * Get TNTPrd value
     */
    public function getTNTPrd(): ?string
    {
        return $this->TNTPrd;
    }

    /**
     * Set TNTPrd value
     */
    public function setTNTPrd(?string $tNTPrd = null): self
    {
        // validation for constraint: string
        if (null !== $tNTPrd && !\is_string($tNTPrd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTPrd, true), \gettype($tNTPrd)), __LINE__);
        }
        $this->TNTPrd = $tNTPrd;

        return $this;
    }

    /**
     * Get TNTVer value
     */
    public function getTNTVer(): ?string
    {
        return $this->TNTVer;
    }

    /**
     * Set TNTVer value
     */
    public function setTNTVer(?string $tNTVer = null): self
    {
        // validation for constraint: string
        if (null !== $tNTVer && !\is_string($tNTVer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTVer, true), \gettype($tNTVer)), __LINE__);
        }
        $this->TNTVer = $tNTVer;

        return $this;
    }

    /**
     * Get TNTComment1 value
     */
    public function getTNTComment1(): ?string
    {
        return $this->TNTComment1;
    }

    /**
     * Set TNTComment1 value
     */
    public function setTNTComment1(?string $tNTComment1 = null): self
    {
        // validation for constraint: string
        if (null !== $tNTComment1 && !\is_string($tNTComment1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTComment1, true), \gettype($tNTComment1)), __LINE__);
        }
        $this->TNTComment1 = $tNTComment1;

        return $this;
    }

    /**
     * Get TNTComment2 value
     */
    public function getTNTComment2(): ?string
    {
        return $this->TNTComment2;
    }

    /**
     * Set TNTComment2 value
     */
    public function setTNTComment2(?string $tNTComment2 = null): self
    {
        // validation for constraint: string
        if (null !== $tNTComment2 && !\is_string($tNTComment2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTComment2, true), \gettype($tNTComment2)), __LINE__);
        }
        $this->TNTComment2 = $tNTComment2;

        return $this;
    }

    /**
     * Get TNTComment3 value
     */
    public function getTNTComment3(): ?string
    {
        return $this->TNTComment3;
    }

    /**
     * Set TNTComment3 value
     */
    public function setTNTComment3(?string $tNTComment3 = null): self
    {
        // validation for constraint: string
        if (null !== $tNTComment3 && !\is_string($tNTComment3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTComment3, true), \gettype($tNTComment3)), __LINE__);
        }
        $this->TNTComment3 = $tNTComment3;

        return $this;
    }

    /**
     * Get TNTComment4 value
     */
    public function getTNTComment4(): ?string
    {
        return $this->TNTComment4;
    }

    /**
     * Set TNTComment4 value
     */
    public function setTNTComment4(?string $tNTComment4 = null): self
    {
        // validation for constraint: string
        if (null !== $tNTComment4 && !\is_string($tNTComment4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTComment4, true), \gettype($tNTComment4)), __LINE__);
        }
        $this->TNTComment4 = $tNTComment4;

        return $this;
    }

    /**
     * Get CLPAcnt value
     */
    public function getCLPAcnt(): ?string
    {
        return $this->CLPAcnt;
    }

    /**
     * Set CLPAcnt value
     */
    public function setCLPAcnt(?string $cLPAcnt = null): self
    {
        // validation for constraint: string
        if (null !== $cLPAcnt && !\is_string($cLPAcnt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cLPAcnt, true), \gettype($cLPAcnt)), __LINE__);
        }
        $this->CLPAcnt = $cLPAcnt;

        return $this;
    }

    /**
     * Get CLPFlwCab value
     */
    public function getCLPFlwCab(): ?string
    {
        return $this->CLPFlwCab;
    }

    /**
     * Set CLPFlwCab value
     */
    public function setCLPFlwCab(?string $cLPFlwCab = null): self
    {
        // validation for constraint: string
        if (null !== $cLPFlwCab && !\is_string($cLPFlwCab)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cLPFlwCab, true), \gettype($cLPFlwCab)), __LINE__);
        }
        $this->CLPFlwCab = $cLPFlwCab;

        return $this;
    }

    /**
     * Get CLPFlwCabPrt value
     */
    public function getCLPFlwCabPrt(): ?string
    {
        return $this->CLPFlwCabPrt;
    }

    /**
     * Set CLPFlwCabPrt value
     */
    public function setCLPFlwCabPrt(?string $cLPFlwCabPrt = null): self
    {
        // validation for constraint: string
        if (null !== $cLPFlwCabPrt && !\is_string($cLPFlwCabPrt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cLPFlwCabPrt, true), \gettype($cLPFlwCabPrt)), __LINE__);
        }
        $this->CLPFlwCabPrt = $cLPFlwCabPrt;

        return $this;
    }

    /**
     * Get CLPPCHCab value
     */
    public function getCLPPCHCab(): ?string
    {
        return $this->CLPPCHCab;
    }

    /**
     * Set CLPPCHCab value
     */
    public function setCLPPCHCab(?string $cLPPCHCab = null): self
    {
        // validation for constraint: string
        if (null !== $cLPPCHCab && !\is_string($cLPPCHCab)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cLPPCHCab, true), \gettype($cLPPCHCab)), __LINE__);
        }
        $this->CLPPCHCab = $cLPPCHCab;

        return $this;
    }

    /**
     * Get CLPPCHCabPrt value
     */
    public function getCLPPCHCabPrt(): ?string
    {
        return $this->CLPPCHCabPrt;
    }

    /**
     * Set CLPPCHCabPrt value
     */
    public function setCLPPCHCabPrt(?string $cLPPCHCabPrt = null): self
    {
        // validation for constraint: string
        if (null !== $cLPPCHCabPrt && !\is_string($cLPPCHCabPrt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cLPPCHCabPrt, true), \gettype($cLPPCHCabPrt)), __LINE__);
        }
        $this->CLPPCHCabPrt = $cLPPCHCabPrt;

        return $this;
    }

    /**
     * Get CLPSort value
     */
    public function getCLPSort(): ?string
    {
        return $this->CLPSort;
    }

    /**
     * Set CLPSort value
     */
    public function setCLPSort(?string $cLPSort = null): self
    {
        // validation for constraint: string
        if (null !== $cLPSort && !\is_string($cLPSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cLPSort, true), \gettype($cLPSort)), __LINE__);
        }
        $this->CLPSort = $cLPSort;

        return $this;
    }

    /**
     * Get CLPPFCSite value
     */
    public function getCLPPFCSite(): ?string
    {
        return $this->CLPPFCSite;
    }

    /**
     * Set CLPPFCSite value
     */
    public function setCLPPFCSite(?string $cLPPFCSite = null): self
    {
        // validation for constraint: string
        if (null !== $cLPPFCSite && !\is_string($cLPPFCSite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cLPPFCSite, true), \gettype($cLPPFCSite)), __LINE__);
        }
        $this->CLPPFCSite = $cLPPFCSite;

        return $this;
    }

    /**
     * Get RefCab value
     */
    public function getRefCab(): ?string
    {
        return $this->RefCab;
    }

    /**
     * Set RefCab value
     */
    public function setRefCab(?string $refCab = null): self
    {
        // validation for constraint: string
        if (null !== $refCab && !\is_string($refCab)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refCab, true), \gettype($refCab)), __LINE__);
        }
        $this->RefCab = $refCab;

        return $this;
    }

    /**
     * Get DestRefExt value
     */
    public function getDestRefExt(): ?string
    {
        return $this->DestRefExt;
    }

    /**
     * Set DestRefExt value
     */
    public function setDestRefExt(?string $destRefExt = null): self
    {
        // validation for constraint: string
        if (null !== $destRefExt && !\is_string($destRefExt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destRefExt, true), \gettype($destRefExt)), __LINE__);
        }
        $this->DestRefExt = $destRefExt;

        return $this;
    }

    /**
     * Get DestRef value
     */
    public function getDestRef(): ?string
    {
        return $this->DestRef;
    }

    /**
     * Set DestRef value
     */
    public function setDestRef(?string $destRef = null): self
    {
        // validation for constraint: string
        if (null !== $destRef && !\is_string($destRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destRef, true), \gettype($destRef)), __LINE__);
        }
        $this->DestRef = $destRef;

        return $this;
    }

    /**
     * Get DestAddr value
     */
    public function getDestAddr(): ?string
    {
        return $this->DestAddr;
    }

    /**
     * Set DestAddr value
     */
    public function setDestAddr(?string $destAddr = null): self
    {
        // validation for constraint: string
        if (null !== $destAddr && !\is_string($destAddr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destAddr, true), \gettype($destAddr)), __LINE__);
        }
        $this->DestAddr = $destAddr;

        return $this;
    }

    /**
     * Get DestZip value
     */
    public function getDestZip(): ?string
    {
        return $this->DestZip;
    }

    /**
     * Set DestZip value
     */
    public function setDestZip(?string $destZip = null): self
    {
        // validation for constraint: string
        if (null !== $destZip && !\is_string($destZip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destZip, true), \gettype($destZip)), __LINE__);
        }
        $this->DestZip = $destZip;

        return $this;
    }

    /**
     * Get DestCity value
     */
    public function getDestCity(): ?string
    {
        return $this->DestCity;
    }

    /**
     * Set DestCity value
     */
    public function setDestCity(?string $destCity = null): self
    {
        // validation for constraint: string
        if (null !== $destCity && !\is_string($destCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destCity, true), \gettype($destCity)), __LINE__);
        }
        $this->DestCity = $destCity;

        return $this;
    }

    /**
     * Get MRCAB value
     */
    public function getMRCAB(): ?string
    {
        return $this->MRCAB;
    }

    /**
     * Set MRCAB value
     */
    public function setMRCAB(?string $mRCAB = null): self
    {
        // validation for constraint: string
        if (null !== $mRCAB && !\is_string($mRCAB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mRCAB, true), \gettype($mRCAB)), __LINE__);
        }
        $this->MRCAB = $mRCAB;

        return $this;
    }

    /**
     * Get MRAgency value
     */
    public function getMRAgency(): ?string
    {
        return $this->MRAgency;
    }

    /**
     * Set MRAgency value
     */
    public function setMRAgency(?string $mRAgency = null): self
    {
        // validation for constraint: string
        if (null !== $mRAgency && !\is_string($mRAgency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mRAgency, true), \gettype($mRAgency)), __LINE__);
        }
        $this->MRAgency = $mRAgency;

        return $this;
    }

    /**
     * Get MRRoundCode value
     */
    public function getMRRoundCode(): ?string
    {
        return $this->MRRoundCode;
    }

    /**
     * Set MRRoundCode value
     */
    public function setMRRoundCode(?string $mRRoundCode = null): self
    {
        // validation for constraint: string
        if (null !== $mRRoundCode && !\is_string($mRRoundCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mRRoundCode, true), \gettype($mRRoundCode)), __LINE__);
        }
        $this->MRRoundCode = $mRRoundCode;

        return $this;
    }

    /**
     * Get MRRefPudo value
     */
    public function getMRRefPudo(): ?string
    {
        return $this->MRRefPudo;
    }

    /**
     * Set MRRefPudo value
     */
    public function setMRRefPudo(?string $mRRefPudo = null): self
    {
        // validation for constraint: string
        if (null !== $mRRefPudo && !\is_string($mRRefPudo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mRRefPudo, true), \gettype($mRRefPudo)), __LINE__);
        }
        $this->MRRefPudo = $mRRefPudo;

        return $this;
    }

    /**
     * Get MRPreTri value
     */
    public function getMRPreTri(): ?string
    {
        return $this->MRPreTri;
    }

    /**
     * Set MRPreTri value
     */
    public function setMRPreTri(?string $mRPreTri = null): self
    {
        // validation for constraint: string
        if (null !== $mRPreTri && !\is_string($mRPreTri)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mRPreTri, true), \gettype($mRPreTri)), __LINE__);
        }
        $this->MRPreTri = $mRPreTri;

        return $this;
    }

    /**
     * Get MRLibPfd value
     */
    public function getMRLibPfd(): ?string
    {
        return $this->MRLibPfd;
    }

    /**
     * Set MRLibPfd value
     */
    public function setMRLibPfd(?string $mRLibPfd = null): self
    {
        // validation for constraint: string
        if (null !== $mRLibPfd && !\is_string($mRLibPfd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mRLibPfd, true), \gettype($mRLibPfd)), __LINE__);
        }
        $this->MRLibPfd = $mRLibPfd;

        return $this;
    }

    /**
     * Get MRNoGroup value
     */
    public function getMRNoGroup(): ?string
    {
        return $this->MRNoGroup;
    }

    /**
     * Set MRNoGroup value
     */
    public function setMRNoGroup(?string $mRNoGroup = null): self
    {
        // validation for constraint: string
        if (null !== $mRNoGroup && !\is_string($mRNoGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mRNoGroup, true), \gettype($mRNoGroup)), __LINE__);
        }
        $this->MRNoGroup = $mRNoGroup;

        return $this;
    }

    /**
     * Get MRNumExpe value
     */
    public function getMRNumExpe(): ?string
    {
        return $this->MRNumExpe;
    }

    /**
     * Set MRNumExpe value
     */
    public function setMRNumExpe(?string $mRNumExpe = null): self
    {
        // validation for constraint: string
        if (null !== $mRNumExpe && !\is_string($mRNumExpe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mRNumExpe, true), \gettype($mRNumExpe)), __LINE__);
        }
        $this->MRNumExpe = $mRNumExpe;

        return $this;
    }
}
