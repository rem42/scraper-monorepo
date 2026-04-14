<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreatePickupAtCustomerBc StructType
 */
#[\AllowDynamicProperties]
class CreatePickupAtCustomerBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?PickupAtCustomerBcRequest $request = null;

    /**
     * Constructor method for CreatePickupAtCustomerBc
     *
     * @uses CreatePickupAtCustomerBc::setRequest()
     */
    public function __construct(?PickupAtCustomerBcRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?PickupAtCustomerBcRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?PickupAtCustomerBcRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
