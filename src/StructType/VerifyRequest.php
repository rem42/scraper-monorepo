<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyRequest StructType
 */
#[\AllowDynamicProperties]
class VerifyRequest extends AbstractStructBase
{
    /**
     * The TimeStamp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $TimeStamp;
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $Customer = null;

    /**
     * Constructor method for VerifyRequest
     *
     * @uses VerifyRequest::setTimeStamp()
     * @uses VerifyRequest::setCustomer()
     */
    public function __construct(int $timeStamp, ?Customer $customer = null)
    {
        $this
            ->setTimeStamp($timeStamp)
            ->setCustomer($customer)
        ;
    }

    /**
     * Get TimeStamp value
     */
    public function getTimeStamp(): int
    {
        return $this->TimeStamp;
    }

    /**
     * Set TimeStamp value
     */
    public function setTimeStamp(int $timeStamp): self
    {
        // validation for constraint: int
        if (null !== $timeStamp && !(\is_int($timeStamp) || ctype_digit($timeStamp))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($timeStamp, true), \gettype($timeStamp)), __LINE__);
        }
        $this->TimeStamp = $timeStamp;

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
}
