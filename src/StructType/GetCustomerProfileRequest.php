<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerProfileRequest StructType
 */
#[\AllowDynamicProperties]
class GetCustomerProfileRequest extends AbstractStructBase
{
    /**
     * The Customers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomer $Customers = null;
    /**
     * The Language
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Language = null;

    /**
     * Constructor method for GetCustomerProfileRequest
     *
     * @uses GetCustomerProfileRequest::setCustomers()
     * @uses GetCustomerProfileRequest::setLanguage()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomer $customers = null, ?string $language = null)
    {
        $this
            ->setCustomers($customers)
            ->setLanguage($language)
        ;
    }

    /**
     * Get Customers value
     */
    public function getCustomers(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomer
    {
        return $this->Customers;
    }

    /**
     * Set Customers value
     */
    public function setCustomers(?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomer $customers = null): self
    {
        $this->Customers = $customers;

        return $this;
    }

    /**
     * Get Language value
     */
    public function getLanguage(): ?string
    {
        return $this->Language;
    }

    /**
     * Set Language value
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (null !== $language && !\is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), \gettype($language)), __LINE__);
        }
        $this->Language = $language;

        return $this;
    }
}
