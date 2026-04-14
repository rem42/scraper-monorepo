<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeoRoutingBaseRequest StructType
 */
#[\AllowDynamicProperties]
class GeoRoutingBaseRequest extends AbstractStructBase
{
    /**
     * The destinationDepot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $destinationDepot;
    /**
     * The countryPrefix
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $countryPrefix = null;
    /**
     * The zipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $zipCode = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $date = null;
    /**
     * The buCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $buCode = null;
    /**
     * The depotStr
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $depotStr = null;

    /**
     * Constructor method for GeoRoutingBaseRequest
     *
     * @uses GeoRoutingBaseRequest::setDestinationDepot()
     * @uses GeoRoutingBaseRequest::setCountryPrefix()
     * @uses GeoRoutingBaseRequest::setZipCode()
     * @uses GeoRoutingBaseRequest::setDate()
     * @uses GeoRoutingBaseRequest::setBuCode()
     * @uses GeoRoutingBaseRequest::setDepotStr()
     */
    public function __construct(int $destinationDepot, ?string $countryPrefix = null, ?string $zipCode = null, ?string $date = null, ?string $buCode = null, ?string $depotStr = null)
    {
        $this
            ->setDestinationDepot($destinationDepot)
            ->setCountryPrefix($countryPrefix)
            ->setZipCode($zipCode)
            ->setDate($date)
            ->setBuCode($buCode)
            ->setDepotStr($depotStr)
        ;
    }

    /**
     * Get destinationDepot value
     */
    public function getDestinationDepot(): int
    {
        return $this->destinationDepot;
    }

    /**
     * Set destinationDepot value
     */
    public function setDestinationDepot(int $destinationDepot): self
    {
        // validation for constraint: int
        if (null !== $destinationDepot && !(\is_int($destinationDepot) || ctype_digit($destinationDepot))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($destinationDepot, true), \gettype($destinationDepot)), __LINE__);
        }
        $this->destinationDepot = $destinationDepot;

        return $this;
    }

    /**
     * Get countryPrefix value
     */
    public function getCountryPrefix(): ?string
    {
        return $this->countryPrefix;
    }

    /**
     * Set countryPrefix value
     */
    public function setCountryPrefix(?string $countryPrefix = null): self
    {
        // validation for constraint: string
        if (null !== $countryPrefix && !\is_string($countryPrefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryPrefix, true), \gettype($countryPrefix)), __LINE__);
        }
        $this->countryPrefix = $countryPrefix;

        return $this;
    }

    /**
     * Get zipCode value
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * Set zipCode value
     */
    public function setZipCode(?string $zipCode = null): self
    {
        // validation for constraint: string
        if (null !== $zipCode && !\is_string($zipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zipCode, true), \gettype($zipCode)), __LINE__);
        }
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get date value
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Set date value
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (null !== $date && !\is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), \gettype($date)), __LINE__);
        }
        $this->date = $date;

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
     * Get depotStr value
     */
    public function getDepotStr(): ?string
    {
        return $this->depotStr;
    }

    /**
     * Set depotStr value
     */
    public function setDepotStr(?string $depotStr = null): self
    {
        // validation for constraint: string
        if (null !== $depotStr && !\is_string($depotStr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($depotStr, true), \gettype($depotStr)), __LINE__);
        }
        $this->depotStr = $depotStr;

        return $this;
    }
}
