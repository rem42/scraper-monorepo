<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBic3Request StructType
 */
#[\AllowDynamicProperties]
class GetBic3Request extends AbstractStructBase
{
    /**
     * The centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $centernumber;
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $customer = null;

    /**
     * Constructor method for GetBic3Request
     *
     * @uses GetBic3Request::setCenternumber()
     * @uses GetBic3Request::setCustomer()
     */
    public function __construct(int $centernumber, ?Customer $customer = null)
    {
        $this
            ->setCenternumber($centernumber)
            ->setCustomer($customer)
        ;
    }

    /**
     * Get centernumber value
     */
    public function getCenternumber(): int
    {
        return $this->centernumber;
    }

    /**
     * Set centernumber value
     */
    public function setCenternumber(int $centernumber): self
    {
        // validation for constraint: int
        if (null !== $centernumber && !(\is_int($centernumber) || ctype_digit($centernumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($centernumber, true), \gettype($centernumber)), __LINE__);
        }
        $this->centernumber = $centernumber;

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
