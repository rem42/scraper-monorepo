<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerminateCollectionRequestBase StructType
 */
#[\AllowDynamicProperties]
class TerminateCollectionRequestBase extends AbstractStructBase
{
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $customer = null;

    /**
     * Constructor method for TerminateCollectionRequestBase
     *
     * @uses TerminateCollectionRequestBase::setCustomer()
     */
    public function __construct(?Customer $customer = null)
    {
        $this
            ->setCustomer($customer)
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
}
