<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeoRoutingReverseRequest StructType
 */
#[\AllowDynamicProperties]
class GeoRoutingReverseRequest extends AbstractStructBase
{
    /**
     * The originIso2Country
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $originIso2Country = null;
    /**
     * The originZipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $originZipCode = null;
    /**
     * The originDepot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $originDepot = null;
    /**
     * The destinationIso2Country
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $destinationIso2Country = null;
    /**
     * The destinationZipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $destinationZipCode = null;
    /**
     * The soCodeReverse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $soCodeReverse = null;
    /**
     * The retourShipperIso2Country
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $retourShipperIso2Country = null;
    /**
     * The retourShipperZipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $retourShipperZipCode = null;
    /**
     * The retourIso2Country
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $retourIso2Country = null;
    /**
     * The retourZipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $retourZipCode = null;
    /**
     * The soCodeRetour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $soCodeRetour = null;
    /**
     * The date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $date = null;

    /**
     * Constructor method for GeoRoutingReverseRequest
     *
     * @uses GeoRoutingReverseRequest::setOriginIso2Country()
     * @uses GeoRoutingReverseRequest::setOriginZipCode()
     * @uses GeoRoutingReverseRequest::setOriginDepot()
     * @uses GeoRoutingReverseRequest::setDestinationIso2Country()
     * @uses GeoRoutingReverseRequest::setDestinationZipCode()
     * @uses GeoRoutingReverseRequest::setSoCodeReverse()
     * @uses GeoRoutingReverseRequest::setRetourShipperIso2Country()
     * @uses GeoRoutingReverseRequest::setRetourShipperZipCode()
     * @uses GeoRoutingReverseRequest::setRetourIso2Country()
     * @uses GeoRoutingReverseRequest::setRetourZipCode()
     * @uses GeoRoutingReverseRequest::setSoCodeRetour()
     * @uses GeoRoutingReverseRequest::setDate()
     */
    public function __construct(?string $originIso2Country = null, ?string $originZipCode = null, ?string $originDepot = null, ?string $destinationIso2Country = null, ?string $destinationZipCode = null, ?string $soCodeReverse = null, ?string $retourShipperIso2Country = null, ?string $retourShipperZipCode = null, ?string $retourIso2Country = null, ?string $retourZipCode = null, ?string $soCodeRetour = null, ?string $date = null)
    {
        $this
            ->setOriginIso2Country($originIso2Country)
            ->setOriginZipCode($originZipCode)
            ->setOriginDepot($originDepot)
            ->setDestinationIso2Country($destinationIso2Country)
            ->setDestinationZipCode($destinationZipCode)
            ->setSoCodeReverse($soCodeReverse)
            ->setRetourShipperIso2Country($retourShipperIso2Country)
            ->setRetourShipperZipCode($retourShipperZipCode)
            ->setRetourIso2Country($retourIso2Country)
            ->setRetourZipCode($retourZipCode)
            ->setSoCodeRetour($soCodeRetour)
            ->setDate($date)
        ;
    }

    /**
     * Get originIso2Country value
     */
    public function getOriginIso2Country(): ?string
    {
        return $this->originIso2Country;
    }

    /**
     * Set originIso2Country value
     */
    public function setOriginIso2Country(?string $originIso2Country = null): self
    {
        // validation for constraint: string
        if (null !== $originIso2Country && !\is_string($originIso2Country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originIso2Country, true), \gettype($originIso2Country)), __LINE__);
        }
        $this->originIso2Country = $originIso2Country;

        return $this;
    }

    /**
     * Get originZipCode value
     */
    public function getOriginZipCode(): ?string
    {
        return $this->originZipCode;
    }

    /**
     * Set originZipCode value
     */
    public function setOriginZipCode(?string $originZipCode = null): self
    {
        // validation for constraint: string
        if (null !== $originZipCode && !\is_string($originZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originZipCode, true), \gettype($originZipCode)), __LINE__);
        }
        $this->originZipCode = $originZipCode;

        return $this;
    }

    /**
     * Get originDepot value
     */
    public function getOriginDepot(): ?string
    {
        return $this->originDepot;
    }

    /**
     * Set originDepot value
     */
    public function setOriginDepot(?string $originDepot = null): self
    {
        // validation for constraint: string
        if (null !== $originDepot && !\is_string($originDepot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originDepot, true), \gettype($originDepot)), __LINE__);
        }
        $this->originDepot = $originDepot;

        return $this;
    }

    /**
     * Get destinationIso2Country value
     */
    public function getDestinationIso2Country(): ?string
    {
        return $this->destinationIso2Country;
    }

    /**
     * Set destinationIso2Country value
     */
    public function setDestinationIso2Country(?string $destinationIso2Country = null): self
    {
        // validation for constraint: string
        if (null !== $destinationIso2Country && !\is_string($destinationIso2Country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationIso2Country, true), \gettype($destinationIso2Country)), __LINE__);
        }
        $this->destinationIso2Country = $destinationIso2Country;

        return $this;
    }

    /**
     * Get destinationZipCode value
     */
    public function getDestinationZipCode(): ?string
    {
        return $this->destinationZipCode;
    }

    /**
     * Set destinationZipCode value
     */
    public function setDestinationZipCode(?string $destinationZipCode = null): self
    {
        // validation for constraint: string
        if (null !== $destinationZipCode && !\is_string($destinationZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationZipCode, true), \gettype($destinationZipCode)), __LINE__);
        }
        $this->destinationZipCode = $destinationZipCode;

        return $this;
    }

    /**
     * Get soCodeReverse value
     */
    public function getSoCodeReverse(): ?string
    {
        return $this->soCodeReverse;
    }

    /**
     * Set soCodeReverse value
     */
    public function setSoCodeReverse(?string $soCodeReverse = null): self
    {
        // validation for constraint: string
        if (null !== $soCodeReverse && !\is_string($soCodeReverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($soCodeReverse, true), \gettype($soCodeReverse)), __LINE__);
        }
        $this->soCodeReverse = $soCodeReverse;

        return $this;
    }

    /**
     * Get retourShipperIso2Country value
     */
    public function getRetourShipperIso2Country(): ?string
    {
        return $this->retourShipperIso2Country;
    }

    /**
     * Set retourShipperIso2Country value
     */
    public function setRetourShipperIso2Country(?string $retourShipperIso2Country = null): self
    {
        // validation for constraint: string
        if (null !== $retourShipperIso2Country && !\is_string($retourShipperIso2Country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retourShipperIso2Country, true), \gettype($retourShipperIso2Country)), __LINE__);
        }
        $this->retourShipperIso2Country = $retourShipperIso2Country;

        return $this;
    }

    /**
     * Get retourShipperZipCode value
     */
    public function getRetourShipperZipCode(): ?string
    {
        return $this->retourShipperZipCode;
    }

    /**
     * Set retourShipperZipCode value
     */
    public function setRetourShipperZipCode(?string $retourShipperZipCode = null): self
    {
        // validation for constraint: string
        if (null !== $retourShipperZipCode && !\is_string($retourShipperZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retourShipperZipCode, true), \gettype($retourShipperZipCode)), __LINE__);
        }
        $this->retourShipperZipCode = $retourShipperZipCode;

        return $this;
    }

    /**
     * Get retourIso2Country value
     */
    public function getRetourIso2Country(): ?string
    {
        return $this->retourIso2Country;
    }

    /**
     * Set retourIso2Country value
     */
    public function setRetourIso2Country(?string $retourIso2Country = null): self
    {
        // validation for constraint: string
        if (null !== $retourIso2Country && !\is_string($retourIso2Country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retourIso2Country, true), \gettype($retourIso2Country)), __LINE__);
        }
        $this->retourIso2Country = $retourIso2Country;

        return $this;
    }

    /**
     * Get retourZipCode value
     */
    public function getRetourZipCode(): ?string
    {
        return $this->retourZipCode;
    }

    /**
     * Set retourZipCode value
     */
    public function setRetourZipCode(?string $retourZipCode = null): self
    {
        // validation for constraint: string
        if (null !== $retourZipCode && !\is_string($retourZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($retourZipCode, true), \gettype($retourZipCode)), __LINE__);
        }
        $this->retourZipCode = $retourZipCode;

        return $this;
    }

    /**
     * Get soCodeRetour value
     */
    public function getSoCodeRetour(): ?string
    {
        return $this->soCodeRetour;
    }

    /**
     * Set soCodeRetour value
     */
    public function setSoCodeRetour(?string $soCodeRetour = null): self
    {
        // validation for constraint: string
        if (null !== $soCodeRetour && !\is_string($soCodeRetour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($soCodeRetour, true), \gettype($soCodeRetour)), __LINE__);
        }
        $this->soCodeRetour = $soCodeRetour;

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
}
