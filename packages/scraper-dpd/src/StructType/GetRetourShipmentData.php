<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourShipmentData StructType
 */
#[\AllowDynamicProperties]
class GetRetourShipmentData extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?RetourShipmentRequest $request = null;

    /**
     * Constructor method for GetRetourShipmentData
     *
     * @uses GetRetourShipmentData::setRequest()
     */
    public function __construct(?RetourShipmentRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?RetourShipmentRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?RetourShipmentRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
