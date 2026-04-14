<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipment StructType
 */
#[\AllowDynamicProperties]
class GetShipment extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ShipmentRequest $request = null;

    /**
     * Constructor method for GetShipment
     *
     * @uses GetShipment::setRequest()
     */
    public function __construct(?ShipmentRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?ShipmentRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?ShipmentRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
