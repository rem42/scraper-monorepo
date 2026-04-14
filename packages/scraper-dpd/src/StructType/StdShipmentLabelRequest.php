<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for StdShipmentLabelRequest StructType
 */
#[\AllowDynamicProperties]
class StdShipmentLabelRequest extends StdShipmentLabelBaseRequest
{
    /**
     * The bic3data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Bic3LabelData $bic3data = null;
    /**
     * The overrideShipperLabelAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Address $overrideShipperLabelAddress = null;
    /**
     * The injectionHub
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $injectionHub = null;
    /**
     * The refnrasbarcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?bool $refnrasbarcode = null;
    /**
     * The referenceInBarcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ReferenceInBarcode $referenceInBarcode = null;

    /**
     * Constructor method for StdShipmentLabelRequest
     *
     * @uses StdShipmentLabelRequest::setBic3data()
     * @uses StdShipmentLabelRequest::setOverrideShipperLabelAddress()
     * @uses StdShipmentLabelRequest::setInjectionHub()
     * @uses StdShipmentLabelRequest::setRefnrasbarcode()
     * @uses StdShipmentLabelRequest::setReferenceInBarcode()
     */
    public function __construct(?Bic3LabelData $bic3data = null, ?Address $overrideShipperLabelAddress = null, ?string $injectionHub = null, ?bool $refnrasbarcode = null, ?ReferenceInBarcode $referenceInBarcode = null)
    {
        $this
            ->setBic3data($bic3data)
            ->setOverrideShipperLabelAddress($overrideShipperLabelAddress)
            ->setInjectionHub($injectionHub)
            ->setRefnrasbarcode($refnrasbarcode)
            ->setReferenceInBarcode($referenceInBarcode)
        ;
    }

    /**
     * Get bic3data value
     */
    public function getBic3data(): ?Bic3LabelData
    {
        return $this->bic3data;
    }

    /**
     * Set bic3data value
     */
    public function setBic3data(?Bic3LabelData $bic3data = null): self
    {
        $this->bic3data = $bic3data;

        return $this;
    }

    /**
     * Get overrideShipperLabelAddress value
     */
    public function getOverrideShipperLabelAddress(): ?Address
    {
        return $this->overrideShipperLabelAddress;
    }

    /**
     * Set overrideShipperLabelAddress value
     */
    public function setOverrideShipperLabelAddress(?Address $overrideShipperLabelAddress = null): self
    {
        $this->overrideShipperLabelAddress = $overrideShipperLabelAddress;

        return $this;
    }

    /**
     * Get injectionHub value
     */
    public function getInjectionHub(): ?string
    {
        return $this->injectionHub;
    }

    /**
     * Set injectionHub value
     */
    public function setInjectionHub(?string $injectionHub = null): self
    {
        // validation for constraint: string
        if (null !== $injectionHub && !\is_string($injectionHub)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($injectionHub, true), \gettype($injectionHub)), __LINE__);
        }
        $this->injectionHub = $injectionHub;

        return $this;
    }

    /**
     * Get refnrasbarcode value
     */
    public function getRefnrasbarcode(): ?bool
    {
        return $this->refnrasbarcode;
    }

    /**
     * Set refnrasbarcode value
     */
    public function setRefnrasbarcode(?bool $refnrasbarcode = null): self
    {
        // validation for constraint: boolean
        if (null !== $refnrasbarcode && !\is_bool($refnrasbarcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refnrasbarcode, true), \gettype($refnrasbarcode)), __LINE__);
        }
        $this->refnrasbarcode = $refnrasbarcode;

        return $this;
    }

    /**
     * Get referenceInBarcode value
     */
    public function getReferenceInBarcode(): ?ReferenceInBarcode
    {
        return $this->referenceInBarcode;
    }

    /**
     * Set referenceInBarcode value
     */
    public function setReferenceInBarcode(?ReferenceInBarcode $referenceInBarcode = null): self
    {
        $this->referenceInBarcode = $referenceInBarcode;

        return $this;
    }
}
