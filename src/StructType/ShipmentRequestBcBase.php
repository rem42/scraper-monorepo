<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ShipmentRequestBcBase StructType
 */
#[\AllowDynamicProperties]
class ShipmentRequestBcBase extends GetShipmentRequestBase
{
    /**
     * The Barcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Barcode = null;
    /**
     * The BarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $BarcodeId = null;
    /**
     * The BarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?int $BarcodeSource;

    /**
     * Constructor method for ShipmentRequestBcBase
     *
     * @uses ShipmentRequestBcBase::setBarcode()
     * @uses ShipmentRequestBcBase::setBarcodeId()
     * @uses ShipmentRequestBcBase::setBarcodeSource()
     */
    public function __construct(?string $barcode = null, ?string $barcodeId = null, ?int $barcodeSource)
    {
        $this
            ->setBarcode($barcode)
            ->setBarcodeId($barcodeId)
            ->setBarcodeSource($barcodeSource)
        ;
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
     * Get BarcodeSource value
     */
    public function getBarcodeSource(): int
    {
        return $this->BarcodeSource;
    }

    /**
     * Set BarcodeSource value
     */
    public function setBarcodeSource(?int $barcodeSource): self
    {
        // validation for constraint: int
        if (null !== $barcodeSource && !(\is_int($barcodeSource) || ctype_digit($barcodeSource))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($barcodeSource, true), \gettype($barcodeSource)), __LINE__);
        }
        $this->BarcodeSource = $barcodeSource;

        return $this;
    }
}
