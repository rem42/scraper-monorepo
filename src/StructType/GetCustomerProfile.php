<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerProfile StructType
 */
#[\AllowDynamicProperties]
class GetCustomerProfile extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetCustomerProfileRequest $request = null;

    /**
     * Constructor method for GetCustomerProfile
     *
     * @uses GetCustomerProfile::setRequest()
     */
    public function __construct(?GetCustomerProfileRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?GetCustomerProfileRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?GetCustomerProfileRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
