<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionRequest StructType
 */
#[\AllowDynamicProperties]
class GetOptionRequest extends AbstractStructBase
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
     * The Option
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Option = null;
    /**
     * The Group
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Group = null;

    /**
     * Constructor method for GetOptionRequest
     *
     * @uses GetOptionRequest::setCustomer()
     * @uses GetOptionRequest::setProductType()
     * @uses GetOptionRequest::setHardwareId()
     * @uses GetOptionRequest::setOption()
     * @uses GetOptionRequest::setGroup()
     */
    public function __construct(?Customer $customer = null, ?string $productType = null, ?string $hardwareId = null, ?string $option = null, ?string $group = null)
    {
        $this
            ->setCustomer($customer)
            ->setProductType($productType)
            ->setHardwareId($hardwareId)
            ->setOption($option)
            ->setGroup($group)
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
     * Get Option value
     */
    public function getOption(): ?string
    {
        return $this->Option;
    }

    /**
     * Set Option value
     */
    public function setOption(?string $option = null): self
    {
        // validation for constraint: string
        if (null !== $option && !\is_string($option)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($option, true), \gettype($option)), __LINE__);
        }
        $this->Option = $option;

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
}
