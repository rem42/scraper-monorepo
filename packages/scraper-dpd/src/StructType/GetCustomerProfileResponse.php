<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerProfileResponse StructType
 */
#[\AllowDynamicProperties]
class GetCustomerProfileResponse extends AbstractStructBase
{
    /**
     * The GetCustomerProfileResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetCustomerProfileResponse $GetCustomerProfileResult = null;
    /**
     * The CustomerProfiles
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomerProfile $CustomerProfiles = null;

    /**
     * Constructor method for GetCustomerProfileResponse
     *
     * @uses GetCustomerProfileResponse::setGetCustomerProfileResult()
     * @uses GetCustomerProfileResponse::setCustomerProfiles()
     */
    public function __construct(?self $getCustomerProfileResult = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomerProfile $customerProfiles = null)
    {
        $this
            ->setGetCustomerProfileResult($getCustomerProfileResult)
            ->setCustomerProfiles($customerProfiles)
        ;
    }

    /**
     * Get GetCustomerProfileResult value
     */
    public function getGetCustomerProfileResult(): ?self
    {
        return $this->GetCustomerProfileResult;
    }

    /**
     * Set GetCustomerProfileResult value
     */
    public function setGetCustomerProfileResult(?self $getCustomerProfileResult = null): self
    {
        $this->GetCustomerProfileResult = $getCustomerProfileResult;

        return $this;
    }

    /**
     * Get CustomerProfiles value
     */
    public function getCustomerProfiles(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomerProfile
    {
        return $this->CustomerProfiles;
    }

    /**
     * Set CustomerProfiles value
     */
    public function setCustomerProfiles(?\Scraper\ScraperDPD\ArrayType\ArrayOfCustomerProfile $customerProfiles = null): self
    {
        $this->CustomerProfiles = $customerProfiles;

        return $this;
    }
}
