<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllServiceNoticesRequest StructType
 */
#[\AllowDynamicProperties]
class GetAllServiceNoticesRequest extends AbstractStructBase
{
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $Customer = null;
    /**
     * The Languages
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfString $Languages = null;
    /**
     * The LastKey
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $LastKey = null;

    /**
     * Constructor method for GetAllServiceNoticesRequest
     *
     * @uses GetAllServiceNoticesRequest::setCustomer()
     * @uses GetAllServiceNoticesRequest::setLanguages()
     * @uses GetAllServiceNoticesRequest::setLastKey()
     */
    public function __construct(?Customer $customer = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfString $languages = null, ?string $lastKey = null)
    {
        $this
            ->setCustomer($customer)
            ->setLanguages($languages)
            ->setLastKey($lastKey)
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
     * Get Languages value
     */
    public function getLanguages(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfString
    {
        return $this->Languages;
    }

    /**
     * Set Languages value
     */
    public function setLanguages(?\Scraper\ScraperDPD\ArrayType\ArrayOfString $languages = null): self
    {
        $this->Languages = $languages;

        return $this;
    }

    /**
     * Get LastKey value
     */
    public function getLastKey(): ?string
    {
        return $this->LastKey;
    }

    /**
     * Set LastKey value
     */
    public function setLastKey(?string $lastKey = null): self
    {
        // validation for constraint: string
        if (null !== $lastKey && !\is_string($lastKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastKey, true), \gettype($lastKey)), __LINE__);
        }
        $this->LastKey = $lastKey;

        return $this;
    }
}
