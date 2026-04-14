<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastNumberRequest StructType
 */
#[\AllowDynamicProperties]
class GetLastNumberRequest extends AbstractStructBase
{
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $Customer = null;
    /**
     * The Entries
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfEntry $Entries = null;

    /**
     * Constructor method for GetLastNumberRequest
     *
     * @uses GetLastNumberRequest::setCustomer()
     * @uses GetLastNumberRequest::setEntries()
     */
    public function __construct(?Customer $customer = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfEntry $entries = null)
    {
        $this
            ->setCustomer($customer)
            ->setEntries($entries)
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
     * Get Entries value
     */
    public function getEntries(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfEntry
    {
        return $this->Entries;
    }

    /**
     * Set Entries value
     */
    public function setEntries(?\Scraper\ScraperDPD\ArrayType\ArrayOfEntry $entries = null): self
    {
        $this->Entries = $entries;

        return $this;
    }
}
