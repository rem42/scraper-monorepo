<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerAddressResponse StructType
 */
#[\AllowDynamicProperties]
class GetCustomerAddressResponse extends AbstractStructBase
{
    /**
     * The GetCustomerAddressResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?CustomerAddress $GetCustomerAddressResult = null;

    /**
     * Constructor method for GetCustomerAddressResponse
     *
     * @uses GetCustomerAddressResponse::setGetCustomerAddressResult()
     */
    public function __construct(?CustomerAddress $getCustomerAddressResult = null)
    {
        $this
            ->setGetCustomerAddressResult($getCustomerAddressResult)
        ;
    }

    /**
     * Get GetCustomerAddressResult value
     */
    public function getGetCustomerAddressResult(): ?CustomerAddress
    {
        return $this->GetCustomerAddressResult;
    }

    /**
     * Set GetCustomerAddressResult value
     */
    public function setGetCustomerAddressResult(?CustomerAddress $getCustomerAddressResult = null): self
    {
        $this->GetCustomerAddressResult = $getCustomerAddressResult;

        return $this;
    }
}
