<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceNoticeRequest StructType
 */
#[\AllowDynamicProperties]
class ServiceNoticeRequest extends AbstractStructBase
{
    /**
     * The customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $customer = null;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $language = null;

    /**
     * Constructor method for ServiceNoticeRequest
     *
     * @uses ServiceNoticeRequest::setCustomer()
     * @uses ServiceNoticeRequest::setLanguage()
     */
    public function __construct(?Customer $customer = null, ?string $language = null)
    {
        $this
            ->setCustomer($customer)
            ->setLanguage($language)
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

    /**
     * Get language value
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Set language value
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (null !== $language && !\is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), \gettype($language)), __LINE__);
        }
        $this->language = $language;

        return $this;
    }
}
