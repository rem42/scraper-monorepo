<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipment StructType
 */
#[\AllowDynamicProperties]
class CreateReverseInverseShipment extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ReverseShipmentRequest $request = null;

    /**
     * Constructor method for CreateReverseInverseShipment
     *
     * @uses CreateReverseInverseShipment::setRequest()
     */
    public function __construct(?ReverseShipmentRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?ReverseShipmentRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?ReverseShipmentRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
