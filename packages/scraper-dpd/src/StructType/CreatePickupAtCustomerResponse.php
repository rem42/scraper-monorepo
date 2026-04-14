<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreatePickupAtCustomerResponse StructType
 */
#[\AllowDynamicProperties]
class CreatePickupAtCustomerResponse extends AbstractStructBase
{
    /**
     * The CreatePickupAtCustomerResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Parcel $CreatePickupAtCustomerResult = null;

    /**
     * Constructor method for CreatePickupAtCustomerResponse
     *
     * @uses CreatePickupAtCustomerResponse::setCreatePickupAtCustomerResult()
     */
    public function __construct(?Parcel $createPickupAtCustomerResult = null)
    {
        $this
            ->setCreatePickupAtCustomerResult($createPickupAtCustomerResult)
        ;
    }

    /**
     * Get CreatePickupAtCustomerResult value
     */
    public function getCreatePickupAtCustomerResult(): ?Parcel
    {
        return $this->CreatePickupAtCustomerResult;
    }

    /**
     * Set CreatePickupAtCustomerResult value
     */
    public function setCreatePickupAtCustomerResult(?Parcel $createPickupAtCustomerResult = null): self
    {
        $this->CreatePickupAtCustomerResult = $createPickupAtCustomerResult;

        return $this;
    }
}
