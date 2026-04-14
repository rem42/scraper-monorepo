<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentBc StructType
 */
#[\AllowDynamicProperties]
class GetShipmentBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ShipmentRequestBc $request = null;

    /**
     * Constructor method for GetShipmentBc
     *
     * @uses GetShipmentBc::setRequest()
     */
    public function __construct(?ShipmentRequestBc $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?ShipmentRequestBc
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?ShipmentRequestBc $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
