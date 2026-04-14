<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreatePickupAtCustomer StructType
 */
#[\AllowDynamicProperties]
class CreatePickupAtCustomer extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?PickupAtCustomerRequest $request = null;

    /**
     * Constructor method for CreatePickupAtCustomer
     *
     * @uses CreatePickupAtCustomer::setRequest()
     */
    public function __construct(?PickupAtCustomerRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?PickupAtCustomerRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?PickupAtCustomerRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
