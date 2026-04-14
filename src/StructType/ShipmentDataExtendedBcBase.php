<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ShipmentDataExtendedBcBase StructType
 */
#[\AllowDynamicProperties]
class ShipmentDataExtendedBcBase extends ShipmentDataExtendedBase
{
    /**
     * The Sin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $Sin;
    /**
     * The Barcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Barcode = null;
    /**
     * The BarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $BarcodeSource = null;
    /**
     * The BarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $BarcodeId = null;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfServiceEntry $Services = null;

    /**
     * Constructor method for ShipmentDataExtendedBcBase
     *
     * @uses ShipmentDataExtendedBcBase::setSin()
     * @uses ShipmentDataExtendedBcBase::setBarcode()
     * @uses ShipmentDataExtendedBcBase::setBarcodeSource()
     * @uses ShipmentDataExtendedBcBase::setBarcodeId()
     * @uses ShipmentDataExtendedBcBase::setServices()
     */
    public function __construct(int $sin, ?string $barcode = null, ?string $barcodeSource = null, ?string $barcodeId = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfServiceEntry $services = null)
    {
        $this
            ->setSin($sin)
            ->setBarcode($barcode)
            ->setBarcodeSource($barcodeSource)
            ->setBarcodeId($barcodeId)
            ->setServices($services)
        ;
    }

    /**
     * Get Sin value
     */
    public function getSin(): int
    {
        return $this->Sin;
    }

    /**
     * Set Sin value
     */
    public function setSin(int $sin): self
    {
        // validation for constraint: int
        if (null !== $sin && !(\is_int($sin) || ctype_digit($sin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sin, true), \gettype($sin)), __LINE__);
        }
        $this->Sin = $sin;

        return $this;
    }

    /**
     * Get Barcode value
     */
    public function getBarcode(): ?string
    {
        return $this->Barcode;
    }

    /**
     * Set Barcode value
     */
    public function setBarcode(?string $barcode = null): self
    {
        // validation for constraint: string
        if (null !== $barcode && !\is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcode, true), \gettype($barcode)), __LINE__);
        }
        $this->Barcode = $barcode;

        return $this;
    }

    /**
     * Get BarcodeSource value
     */
    public function getBarcodeSource(): ?string
    {
        return $this->BarcodeSource;
    }

    /**
     * Set BarcodeSource value
     */
    public function setBarcodeSource(?string $barcodeSource = null): self
    {
        // validation for constraint: string
        if (null !== $barcodeSource && !\is_string($barcodeSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeSource, true), \gettype($barcodeSource)), __LINE__);
        }
        $this->BarcodeSource = $barcodeSource;

        return $this;
    }

    /**
     * Get BarcodeId value
     */
    public function getBarcodeId(): ?string
    {
        return $this->BarcodeId;
    }

    /**
     * Set BarcodeId value
     */
    public function setBarcodeId(?string $barcodeId = null): self
    {
        // validation for constraint: string
        if (null !== $barcodeId && !\is_string($barcodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeId, true), \gettype($barcodeId)), __LINE__);
        }
        $this->BarcodeId = $barcodeId;

        return $this;
    }

    /**
     * Get Services value
     */
    public function getServices(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfServiceEntry
    {
        return $this->Services;
    }

    /**
     * Set Services value
     */
    public function setServices(?\Scraper\ScraperDPD\ArrayType\ArrayOfServiceEntry $services = null): self
    {
        $this->Services = $services;

        return $this;
    }
}
