<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourShipmentDataBc StructType
 */
#[\AllowDynamicProperties]
class GetRetourShipmentDataBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?RetourShipmentBcRequest $request = null;

    /**
     * Constructor method for GetRetourShipmentDataBc
     *
     * @uses GetRetourShipmentDataBc::setRequest()
     */
    public function __construct(?RetourShipmentBcRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?RetourShipmentBcRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?RetourShipmentBcRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
