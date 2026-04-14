<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShippingRequest StructType
 */
#[\AllowDynamicProperties]
class GetShippingRequest extends AbstractStructBase
{
    /**
     * The date
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $date = null;
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $customer = null;

    /**
     * Constructor method for GetShippingRequest
     *
     * @uses GetShippingRequest::setDate()
     * @uses GetShippingRequest::setCustomer()
     */
    public function __construct(?string $date = null, ?Customer $customer = null)
    {
        $this
            ->setDate($date)
            ->setCustomer($customer)
        ;
    }

    /**
     * Get date value
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Set date value
     */
    public function setDate(?string $date = null): self
    {
        // validation for constraint: string
        if (null !== $date && !\is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($date, true), \gettype($date)), __LINE__);
        }
        $this->date = $date;

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
