<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerminateShipment StructType
 */
#[\AllowDynamicProperties]
class TerminateShipment extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?TerminateShipmentRequest $request = null;

    /**
     * Constructor method for TerminateShipment
     *
     * @uses TerminateShipment::setRequest()
     */
    public function __construct(?TerminateShipmentRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?TerminateShipmentRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?TerminateShipmentRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
