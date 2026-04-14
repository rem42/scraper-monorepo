<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMultiShipment StructType
 */
#[\AllowDynamicProperties]
class CreateMultiShipment extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?MultiShipmentRequest $request = null;

    /**
     * Constructor method for CreateMultiShipment
     *
     * @uses CreateMultiShipment::setRequest()
     */
    public function __construct(?MultiShipmentRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?MultiShipmentRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?MultiShipmentRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
