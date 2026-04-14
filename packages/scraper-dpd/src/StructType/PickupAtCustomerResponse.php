<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupAtCustomerResponse StructType
 */
#[\AllowDynamicProperties]
class PickupAtCustomerResponse extends AbstractStructBase
{
    /**
     * The Sin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $Sin;

    /**
     * Constructor method for PickupAtCustomerResponse
     *
     * @uses PickupAtCustomerResponse::setSin()
     */
    public function __construct(int $sin)
    {
        $this
            ->setSin($sin)
        ;
    }

    /**
     * Get Sin value
     */
    public function getSin(): int
    {
        return $this->Sin;
    }

    /**
     * Set Sin value
     */
    public function setSin(int $sin): self
    {
        // validation for constraint: int
        if (null !== $sin && !(\is_int($sin) || ctype_digit($sin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sin, true), \gettype($sin)), __LINE__);
        }
        $this->Sin = $sin;

        return $this;
    }
}
