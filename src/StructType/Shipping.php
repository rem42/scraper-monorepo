<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Shipping StructType
 */
#[\AllowDynamicProperties]
class Shipping extends AbstractStructBase
{
    /**
     * The barcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $barcodeSource;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected float $weight;
    /**
     * The shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $shipment = null;
    /**
     * The barcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $barcodeId = null;
    /**
     * The receiverAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?AddressIso2Name $receiverAddress = null;
    /**
     * The reference
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $reference = null;

    /**
     * Constructor method for Shipping
     *
     * @uses Shipping::setBarcodeSource()
     * @uses Shipping::setWeight()
     * @uses Shipping::setShipment()
     * @uses Shipping::setBarcodeId()
     * @uses Shipping::setReceiverAddress()
     * @uses Shipping::setReference()
     */
    public function __construct(int $barcodeSource, float $weight, ?string $shipment = null, ?string $barcodeId = null, ?AddressIso2Name $receiverAddress = null, ?string $reference = null)
    {
        $this
            ->setBarcodeSource($barcodeSource)
            ->setWeight($weight)
            ->setShipment($shipment)
            ->setBarcodeId($barcodeId)
            ->setReceiverAddress($receiverAddress)
            ->setReference($reference)
        ;
    }

    /**
     * Get barcodeSource value
     */
    public function getBarcodeSource(): int
    {
        return $this->barcodeSource;
    }

    /**
     * Set barcodeSource value
     */
    public function setBarcodeSource(int $barcodeSource): self
    {
        // validation for constraint: int
        if (null !== $barcodeSource && !(\is_int($barcodeSource) || ctype_digit($barcodeSource))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($barcodeSource, true), \gettype($barcodeSource)), __LINE__);
        }
        $this->barcodeSource = $barcodeSource;

        return $this;
    }

    /**
     * Get weight value
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * Set weight value
     */
    public function setWeight(float $weight): self
    {
        // validation for constraint: float
        if (null !== $weight && !(\is_float($weight) || is_numeric($weight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($weight, true), \gettype($weight)), __LINE__);
        }
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get shipment value
     */
    public function getShipment(): ?string
    {
        return $this->shipment;
    }

    /**
     * Set shipment value
     */
    public function setShipment(?string $shipment = null): self
    {
        // validation for constraint: string
        if (null !== $shipment && !\is_string($shipment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipment, true), \gettype($shipment)), __LINE__);
        }
        $this->shipment = $shipment;

        return $this;
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
     * Get receiverAddress value
     */
    public function getReceiverAddress(): ?AddressIso2Name
    {
        return $this->receiverAddress;
    }

    /**
     * Set receiverAddress value
     */
    public function setReceiverAddress(?AddressIso2Name $receiverAddress = null): self
    {
        $this->receiverAddress = $receiverAddress;

        return $this;
    }

    /**
     * Get reference value
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Set reference value
     */
    public function setReference(?string $reference = null): self
    {
        // validation for constraint: string
        if (null !== $reference && !\is_string($reference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), \gettype($reference)), __LINE__);
        }
        $this->reference = $reference;

        return $this;
    }
}
