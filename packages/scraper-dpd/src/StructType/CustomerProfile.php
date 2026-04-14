<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerProfile StructType
 */
#[\AllowDynamicProperties]
class CustomerProfile extends AbstractStructBase
{
    /**
     * The Locked
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $Locked;
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $Customer = null;
    /**
     * The Addresses
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfProfileAddress $Addresses = null;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomerService $Services = null;

    /**
     * Constructor method for CustomerProfile
     *
     * @uses CustomerProfile::setLocked()
     * @uses CustomerProfile::setCustomer()
     * @uses CustomerProfile::setAddresses()
     * @uses CustomerProfile::setServices()
     */
    public function __construct(bool $locked, ?Customer $customer = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfProfileAddress $addresses = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomerService $services = null)
    {
        $this
            ->setLocked($locked)
            ->setCustomer($customer)
            ->setAddresses($addresses)
            ->setServices($services)
        ;
    }

    /**
     * Get Locked value
     */
    public function getLocked(): bool
    {
        return $this->Locked;
    }

    /**
     * Set Locked value
     */
    public function setLocked(bool $locked): self
    {
        // validation for constraint: boolean
        if (null !== $locked && !\is_bool($locked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($locked, true), \gettype($locked)), __LINE__);
        }
        $this->Locked = $locked;

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
     * Get Addresses value
     */
    public function getAddresses(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfProfileAddress
    {
        return $this->Addresses;
    }

    /**
     * Set Addresses value
     */
    public function setAddresses(?\Scraper\ScraperDPD\ArrayType\ArrayOfProfileAddress $addresses = null): self
    {
        $this->Addresses = $addresses;

        return $this;
    }

    /**
     * Get Services value
     */
    public function getServices(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomerService
    {
        return $this->Services;
    }

    /**
     * Set Services value
     */
    public function setServices(?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomerService $services = null): self
    {
        $this->Services = $services;

        return $this;
    }
}
