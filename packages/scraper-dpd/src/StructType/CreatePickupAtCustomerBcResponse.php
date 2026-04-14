<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreatePickupAtCustomerBcResponse StructType
 */
#[\AllowDynamicProperties]
class CreatePickupAtCustomerBcResponse extends AbstractStructBase
{
    /**
     * The CreatePickupAtCustomerBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?PickupAtCustomerResponse $CreatePickupAtCustomerBcResult = null;

    /**
     * Constructor method for CreatePickupAtCustomerBcResponse
     *
     * @uses CreatePickupAtCustomerBcResponse::setCreatePickupAtCustomerBcResult()
     */
    public function __construct(?PickupAtCustomerResponse $createPickupAtCustomerBcResult = null)
    {
        $this
            ->setCreatePickupAtCustomerBcResult($createPickupAtCustomerBcResult)
        ;
    }

    /**
     * Get CreatePickupAtCustomerBcResult value
     */
    public function getCreatePickupAtCustomerBcResult(): ?PickupAtCustomerResponse
    {
        return $this->CreatePickupAtCustomerBcResult;
    }

    /**
     * Set CreatePickupAtCustomerBcResult value
     */
    public function setCreatePickupAtCustomerBcResult(?PickupAtCustomerResponse $createPickupAtCustomerBcResult = null): self
    {
        $this->CreatePickupAtCustomerBcResult = $createPickupAtCustomerBcResult;

        return $this;
    }
}
