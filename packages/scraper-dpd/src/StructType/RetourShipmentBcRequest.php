<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for RetourShipmentBcRequest StructType
 */
#[\AllowDynamicProperties]
class RetourShipmentBcRequest extends RetourShipmentBaseRequest
{
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $customer = null;
    /**
     * The originalBarcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $originalBarcode = null;
    /**
     * The originalBarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $originalBarcodeId = null;
    /**
     * The originalBarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?int $originalBarcodeSource;

    /**
     * Constructor method for RetourShipmentBcRequest
     *
     * @uses RetourShipmentBcRequest::setCustomer()
     * @uses RetourShipmentBcRequest::setOriginalBarcode()
     * @uses RetourShipmentBcRequest::setOriginalBarcodeId()
     * @uses RetourShipmentBcRequest::setOriginalBarcodeSource()
     */
    public function __construct(?Customer $customer = null, ?string $originalBarcode = null, ?string $originalBarcodeId = null, ?int $originalBarcodeSource)
    {
        $this
            ->setCustomer($customer)
            ->setOriginalBarcode($originalBarcode)
            ->setOriginalBarcodeId($originalBarcodeId)
            ->setOriginalBarcodeSource($originalBarcodeSource)
        ;
    }

    /**
     * Get customer value
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    /**
     * Set customer value
     */
    public function setCustomer(?Customer $customer = null): self
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get originalBarcode value
     */
    public function getOriginalBarcode(): ?string
    {
        return $this->originalBarcode;
    }

    /**
     * Set originalBarcode value
     */
    public function setOriginalBarcode(?string $originalBarcode = null): self
    {
        // validation for constraint: string
        if (null !== $originalBarcode && !\is_string($originalBarcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalBarcode, true), \gettype($originalBarcode)), __LINE__);
        }
        $this->originalBarcode = $originalBarcode;

        return $this;
    }

    /**
     * Get originalBarcodeId value
     */
    public function getOriginalBarcodeId(): ?string
    {
        return $this->originalBarcodeId;
    }

    /**
     * Set originalBarcodeId value
     */
    public function setOriginalBarcodeId(?string $originalBarcodeId = null): self
    {
        // validation for constraint: string
        if (null !== $originalBarcodeId && !\is_string($originalBarcodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalBarcodeId, true), \gettype($originalBarcodeId)), __LINE__);
        }
        $this->originalBarcodeId = $originalBarcodeId;

        return $this;
    }

    /**
     * Get originalBarcodeSource value
     */
    public function getOriginalBarcodeSource(): int
    {
        return $this->originalBarcodeSource;
    }

    /**
     * Set originalBarcodeSource value
     */
    public function setOriginalBarcodeSource(?int $originalBarcodeSource): self
    {
        // validation for constraint: int
        if (null !== $originalBarcodeSource && !(\is_int($originalBarcodeSource) || ctype_digit($originalBarcodeSource))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($originalBarcodeSource, true), \gettype($originalBarcodeSource)), __LINE__);
        }
        $this->originalBarcodeSource = $originalBarcodeSource;

        return $this;
    }
}
