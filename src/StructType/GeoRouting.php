<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeoRouting StructType
 */
#[\AllowDynamicProperties]
class GeoRouting extends AbstractStructBase
{
    /**
     * The barcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $barcodeId = null;
    /**
     * The barcodePostcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $barcodePostcode = null;
    /**
     * The buAlphaStr
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $buAlphaStr = null;
    /**
     * The buCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $buCode = null;
    /**
     * The cSort
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $cSort = null;
    /**
     * The dCountry
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $dCountry = null;
    /**
     * The dDepot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $dDepot = null;
    /**
     * The dDepotCountry
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $dDepotCountry = null;
    /**
     * The dDepotStr
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $dDepotStr = null;
    /**
     * The dSort
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $dSort = null;
    /**
     * The networkCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $networkCode = null;
    /**
     * The oSort
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $oSort = null;
    /**
     * The partnerCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $partnerCode = null;
    /**
     * The routingText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $routingText = null;
    /**
     * The sSort
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $sSort = null;
    /**
     * The serviceMark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $serviceMark = null;
    /**
     * The serviceText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $serviceText = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $version = null;
    /**
     * The soCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $soCode = null;

    /**
     * Constructor method for GeoRouting
     *
     * @uses GeoRouting::setBarcodeId()
     * @uses GeoRouting::setBarcodePostcode()
     * @uses GeoRouting::setBuAlphaStr()
     * @uses GeoRouting::setBuCode()
     * @uses GeoRouting::setCSort()
     * @uses GeoRouting::setDCountry()
     * @uses GeoRouting::setDDepot()
     * @uses GeoRouting::setDDepotCountry()
     * @uses GeoRouting::setDDepotStr()
     * @uses GeoRouting::setDSort()
     * @uses GeoRouting::setNetworkCode()
     * @uses GeoRouting::setOSort()
     * @uses GeoRouting::setPartnerCode()
     * @uses GeoRouting::setRoutingText()
     * @uses GeoRouting::setSSort()
     * @uses GeoRouting::setServiceMark()
     * @uses GeoRouting::setServiceText()
     * @uses GeoRouting::setVersion()
     * @uses GeoRouting::setSoCode()
     */
    public function __construct(?string $barcodeId = null, ?string $barcodePostcode = null, ?string $buAlphaStr = null, ?string $buCode = null, ?string $cSort = null, ?string $dCountry = null, ?string $dDepot = null, ?string $dDepotCountry = null, ?string $dDepotStr = null, ?string $dSort = null, ?string $networkCode = null, ?string $oSort = null, ?string $partnerCode = null, ?string $routingText = null, ?string $sSort = null, ?string $serviceMark = null, ?string $serviceText = null, ?string $version = null, ?string $soCode = null)
    {
        $this
            ->setBarcodeId($barcodeId)
            ->setBarcodePostcode($barcodePostcode)
            ->setBuAlphaStr($buAlphaStr)
            ->setBuCode($buCode)
            ->setCSort($cSort)
            ->setDCountry($dCountry)
            ->setDDepot($dDepot)
            ->setDDepotCountry($dDepotCountry)
            ->setDDepotStr($dDepotStr)
            ->setDSort($dSort)
            ->setNetworkCode($networkCode)
            ->setOSort($oSort)
            ->setPartnerCode($partnerCode)
            ->setRoutingText($routingText)
            ->setSSort($sSort)
            ->setServiceMark($serviceMark)
            ->setServiceText($serviceText)
            ->setVersion($version)
            ->setSoCode($soCode)
        ;
    }

    /**
     * Get barcodeId value
     */
    public function getBarcodeId(): ?string
    {
        return $this->barcodeId;
    }

    /**
     * Set barcodeId value
     */
    public function setBarcodeId(?string $barcodeId = null): self
    {
        // validation for constraint: string
        if (null !== $barcodeId && !\is_string($barcodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeId, true), \gettype($barcodeId)), __LINE__);
        }
        $this->barcodeId = $barcodeId;

        return $this;
    }

    /**
     * Get barcodePostcode value
     */
    public function getBarcodePostcode(): ?string
    {
        return $this->barcodePostcode;
    }

    /**
     * Set barcodePostcode value
     */
    public function setBarcodePostcode(?string $barcodePostcode = null): self
    {
        // validation for constraint: string
        if (null !== $barcodePostcode && !\is_string($barcodePostcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodePostcode, true), \gettype($barcodePostcode)), __LINE__);
        }
        $this->barcodePostcode = $barcodePostcode;

        return $this;
    }

    /**
     * Get buAlphaStr value
     */
    public function getBuAlphaStr(): ?string
    {
        return $this->buAlphaStr;
    }

    /**
     * Set buAlphaStr value
     */
    public function setBuAlphaStr(?string $buAlphaStr = null): self
    {
        // validation for constraint: string
        if (null !== $buAlphaStr && !\is_string($buAlphaStr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buAlphaStr, true), \gettype($buAlphaStr)), __LINE__);
        }
        $this->buAlphaStr = $buAlphaStr;

        return $this;
    }

    /**
     * Get buCode value
     */
    public function getBuCode(): ?string
    {
        return $this->buCode;
    }

    /**
     * Set buCode value
     */
    public function setBuCode(?string $buCode = null): self
    {
        // validation for constraint: string
        if (null !== $buCode && !\is_string($buCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buCode, true), \gettype($buCode)), __LINE__);
        }
        $this->buCode = $buCode;

        return $this;
    }

    /**
     * Get cSort value
     */
    public function getCSort(): ?string
    {
        return $this->cSort;
    }

    /**
     * Set cSort value
     */
    public function setCSort(?string $cSort = null): self
    {
        // validation for constraint: string
        if (null !== $cSort && !\is_string($cSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cSort, true), \gettype($cSort)), __LINE__);
        }
        $this->cSort = $cSort;

        return $this;
    }

    /**
     * Get dCountry value
     */
    public function getDCountry(): ?string
    {
        return $this->dCountry;
    }

    /**
     * Set dCountry value
     */
    public function setDCountry(?string $dCountry = null): self
    {
        // validation for constraint: string
        if (null !== $dCountry && !\is_string($dCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dCountry, true), \gettype($dCountry)), __LINE__);
        }
        $this->dCountry = $dCountry;

        return $this;
    }

    /**
     * Get dDepot value
     */
    public function getDDepot(): ?string
    {
        return $this->dDepot;
    }

    /**
     * Set dDepot value
     */
    public function setDDepot(?string $dDepot = null): self
    {
        // validation for constraint: string
        if (null !== $dDepot && !\is_string($dDepot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dDepot, true), \gettype($dDepot)), __LINE__);
        }
        $this->dDepot = $dDepot;

        return $this;
    }

    /**
     * Get dDepotCountry value
     */
    public function getDDepotCountry(): ?string
    {
        return $this->dDepotCountry;
    }

    /**
     * Set dDepotCountry value
     */
    public function setDDepotCountry(?string $dDepotCountry = null): self
    {
        // validation for constraint: string
        if (null !== $dDepotCountry && !\is_string($dDepotCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dDepotCountry, true), \gettype($dDepotCountry)), __LINE__);
        }
        $this->dDepotCountry = $dDepotCountry;

        return $this;
    }

    /**
     * Get dDepotStr value
     */
    public function getDDepotStr(): ?string
    {
        return $this->dDepotStr;
    }

    /**
     * Set dDepotStr value
     */
    public function setDDepotStr(?string $dDepotStr = null): self
    {
        // validation for constraint: string
        if (null !== $dDepotStr && !\is_string($dDepotStr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dDepotStr, true), \gettype($dDepotStr)), __LINE__);
        }
        $this->dDepotStr = $dDepotStr;

        return $this;
    }

    /**
     * Get dSort value
     */
    public function getDSort(): ?string
    {
        return $this->dSort;
    }

    /**
     * Set dSort value
     */
    public function setDSort(?string $dSort = null): self
    {
        // validation for constraint: string
        if (null !== $dSort && !\is_string($dSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dSort, true), \gettype($dSort)), __LINE__);
        }
        $this->dSort = $dSort;

        return $this;
    }

    /**
     * Get networkCode value
     */
    public function getNetworkCode(): ?string
    {
        return $this->networkCode;
    }

    /**
     * Set networkCode value
     */
    public function setNetworkCode(?string $networkCode = null): self
    {
        // validation for constraint: string
        if (null !== $networkCode && !\is_string($networkCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($networkCode, true), \gettype($networkCode)), __LINE__);
        }
        $this->networkCode = $networkCode;

        return $this;
    }

    /**
     * Get oSort value
     */
    public function getOSort(): ?string
    {
        return $this->oSort;
    }

    /**
     * Set oSort value
     */
    public function setOSort(?string $oSort = null): self
    {
        // validation for constraint: string
        if (null !== $oSort && !\is_string($oSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oSort, true), \gettype($oSort)), __LINE__);
        }
        $this->oSort = $oSort;

        return $this;
    }

    /**
     * Get partnerCode value
     */
    public function getPartnerCode(): ?string
    {
        return $this->partnerCode;
    }

    /**
     * Set partnerCode value
     */
    public function setPartnerCode(?string $partnerCode = null): self
    {
        // validation for constraint: string
        if (null !== $partnerCode && !\is_string($partnerCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($partnerCode, true), \gettype($partnerCode)), __LINE__);
        }
        $this->partnerCode = $partnerCode;

        return $this;
    }

    /**
     * Get routingText value
     */
    public function getRoutingText(): ?string
    {
        return $this->routingText;
    }

    /**
     * Set routingText value
     */
    public function setRoutingText(?string $routingText = null): self
    {
        // validation for constraint: string
        if (null !== $routingText && !\is_string($routingText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingText, true), \gettype($routingText)), __LINE__);
        }
        $this->routingText = $routingText;

        return $this;
    }

    /**
     * Get sSort value
     */
    public function getSSort(): ?string
    {
        return $this->sSort;
    }

    /**
     * Set sSort value
     */
    public function setSSort(?string $sSort = null): self
    {
        // validation for constraint: string
        if (null !== $sSort && !\is_string($sSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sSort, true), \gettype($sSort)), __LINE__);
        }
        $this->sSort = $sSort;

        return $this;
    }

    /**
     * Get serviceMark value
     */
    public function getServiceMark(): ?string
    {
        return $this->serviceMark;
    }

    /**
     * Set serviceMark value
     */
    public function setServiceMark(?string $serviceMark = null): self
    {
        // validation for constraint: string
        if (null !== $serviceMark && !\is_string($serviceMark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceMark, true), \gettype($serviceMark)), __LINE__);
        }
        $this->serviceMark = $serviceMark;

        return $this;
    }

    /**
     * Get serviceText value
     */
    public function getServiceText(): ?string
    {
        return $this->serviceText;
    }

    /**
     * Set serviceText value
     */
    public function setServiceText(?string $serviceText = null): self
    {
        // validation for constraint: string
        if (null !== $serviceText && !\is_string($serviceText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceText, true), \gettype($serviceText)), __LINE__);
        }
        $this->serviceText = $serviceText;

        return $this;
    }

    /**
     * Get version value
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Set version value
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (null !== $version && !\is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), \gettype($version)), __LINE__);
        }
        $this->version = $version;

        return $this;
    }

    /**
     * Get soCode value
     */
    public function getSoCode(): ?string
    {
        return $this->soCode;
    }

    /**
     * Set soCode value
     */
    public function setSoCode(?string $soCode = null): self
    {
        // validation for constraint: string
        if (null !== $soCode && !\is_string($soCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($soCode, true), \gettype($soCode)), __LINE__);
        }
        $this->soCode = $soCode;

        return $this;
    }
}
