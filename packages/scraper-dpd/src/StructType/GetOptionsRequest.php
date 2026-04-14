<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionsRequest StructType
 */
#[\AllowDynamicProperties]
class GetOptionsRequest extends AbstractStructBase
{
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $Customer = null;
    /**
     * The ProductType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ProductType = null;
    /**
     * The HardwareId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $HardwareId = null;
    /**
     * The Group
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Group = null;
    /**
     * The Options
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfString $Options = null;

    /**
     * Constructor method for GetOptionsRequest
     *
     * @uses GetOptionsRequest::setCustomer()
     * @uses GetOptionsRequest::setProductType()
     * @uses GetOptionsRequest::setHardwareId()
     * @uses GetOptionsRequest::setGroup()
     * @uses GetOptionsRequest::setOptions()
     */
    public function __construct(?Customer $customer = null, ?string $productType = null, ?string $hardwareId = null, ?string $group = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfString $options = null)
    {
        $this
            ->setCustomer($customer)
            ->setProductType($productType)
            ->setHardwareId($hardwareId)
            ->setGroup($group)
            ->setOptions($options)
        ;
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
     * Get ProductType value
     */
    public function getProductType(): ?string
    {
        return $this->ProductType;
    }

    /**
     * Set ProductType value
     */
    public function setProductType(?string $productType = null): self
    {
        // validation for constraint: string
        if (null !== $productType && !\is_string($productType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productType, true), \gettype($productType)), __LINE__);
        }
        $this->ProductType = $productType;

        return $this;
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
     * Get Group value
     */
    public function getGroup(): ?string
    {
        return $this->Group;
    }

    /**
     * Set Group value
     */
    public function setGroup(?string $group = null): self
    {
        // validation for constraint: string
        if (null !== $group && !\is_string($group)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($group, true), \gettype($group)), __LINE__);
        }
        $this->Group = $group;

        return $this;
    }

    /**
     * Get Options value
     */
    public function getOptions(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfString
    {
        return $this->Options;
    }

    /**
     * Set Options value
     */
    public function setOptions(?\Scraper\ScraperDPD\ArrayType\ArrayOfString $options = null): self
    {
        $this->Options = $options;

        return $this;
    }
}
