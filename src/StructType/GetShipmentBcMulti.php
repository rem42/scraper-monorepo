<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipmentBcMulti StructType
 */
#[\AllowDynamicProperties]
class GetShipmentBcMulti extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetShipmentBcMultiRequest $request = null;

    /**
     * Constructor method for GetShipmentBcMulti
     *
     * @uses GetShipmentBcMulti::setRequest()
     */
    public function __construct(?GetShipmentBcMultiRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?GetShipmentBcMultiRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?GetShipmentBcMultiRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
