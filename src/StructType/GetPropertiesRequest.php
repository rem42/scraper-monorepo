<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPropertiesRequest StructType
 */
#[\AllowDynamicProperties]
class GetPropertiesRequest extends AbstractStructBase
{
    /**
     * The HardwareId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $HardwareId = null;
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $Customer = null;
    /**
     * The Product
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Product = null;

    /**
     * Constructor method for GetPropertiesRequest
     *
     * @uses GetPropertiesRequest::setHardwareId()
     * @uses GetPropertiesRequest::setCustomer()
     * @uses GetPropertiesRequest::setProduct()
     */
    public function __construct(?string $hardwareId = null, ?Customer $customer = null, ?string $product = null)
    {
        $this
            ->setHardwareId($hardwareId)
            ->setCustomer($customer)
            ->setProduct($product)
        ;
    }

    /**
     * Get HardwareId value
     */
    public function getHardwareId(): ?string
    {
        return $this->HardwareId;
    }

    /**
     * Set HardwareId value
     */
    public function setHardwareId(?string $hardwareId = null): self
    {
        // validation for constraint: string
        if (null !== $hardwareId && !\is_string($hardwareId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hardwareId, true), \gettype($hardwareId)), __LINE__);
        }
        $this->HardwareId = $hardwareId;

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
     * Get Product value
     */
    public function getProduct(): ?string
    {
        return $this->Product;
    }

    /**
     * Set Product value
     */
    public function setProduct(?string $product = null): self
    {
        // validation for constraint: string
        if (null !== $product && !\is_string($product)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($product, true), \gettype($product)), __LINE__);
        }
        $this->Product = $product;

        return $this;
    }
}
