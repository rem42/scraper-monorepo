<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSafePlaceDataRequest StructType
 */
#[\AllowDynamicProperties]
class GetSafePlaceDataRequest extends AbstractStructBase
{
    /**
     * The BarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $BarcodeId = null;
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $Customer = null;
    /**
     * The BarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?int $BarcodeSource;

    /**
     * Constructor method for GetSafePlaceDataRequest
     *
     * @uses GetSafePlaceDataRequest::setBarcodeId()
     * @uses GetSafePlaceDataRequest::setCustomer()
     * @uses GetSafePlaceDataRequest::setBarcodeSource()
     */
    public function __construct(?string $barcodeId = null, ?Customer $customer = null, ?int $barcodeSource)
    {
        $this
            ->setBarcodeId($barcodeId)
            ->setCustomer($customer)
            ->setBarcodeSource($barcodeSource)
        ;
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
     * Get Customer value
     */
    public function getCustomer(): ?Customer
    {
        return $this->Customer;
    }

    /**
     * Set Customer value
     */
    public function setCustomer(?Customer $customer = null): self
    {
        $this->Customer = $customer;

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
