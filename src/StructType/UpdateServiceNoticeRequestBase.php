<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateServiceNoticeRequestBase StructType
 */
#[\AllowDynamicProperties]
class UpdateServiceNoticeRequestBase extends AbstractStructBase
{
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
     * - minOccurs: 0
     */
    protected ?string $BarcodeSource = null;
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $customer = null;

    /**
     * Constructor method for UpdateServiceNoticeRequestBase
     *
     * @uses UpdateServiceNoticeRequestBase::setBarcodeId()
     * @uses UpdateServiceNoticeRequestBase::setBarcodeSource()
     * @uses UpdateServiceNoticeRequestBase::setCustomer()
     */
    public function __construct(?string $barcodeId = null, ?string $barcodeSource = null, ?Customer $customer = null)
    {
        $this
            ->setBarcodeId($barcodeId)
            ->setBarcodeSource($barcodeSource)
            ->setCustomer($customer)
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
}
