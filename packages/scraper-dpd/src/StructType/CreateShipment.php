<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipment StructType
 */
#[\AllowDynamicProperties]
class CreateShipment extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?StdShipmentRequest $request = null;

    /**
     * Constructor method for CreateShipment
     *
     * @uses CreateShipment::setRequest()
     */
    public function __construct(?StdShipmentRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?StdShipmentRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?StdShipmentRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
