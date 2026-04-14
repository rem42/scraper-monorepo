<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRdvShipmentData StructType
 */
#[\AllowDynamicProperties]
class GetRdvShipmentData extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetRdvShipmentDataRequest $request = null;

    /**
     * Constructor method for GetRdvShipmentData
     *
     * @uses GetRdvShipmentData::setRequest()
     */
    public function __construct(?GetRdvShipmentDataRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?GetRdvShipmentDataRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?GetRdvShipmentDataRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
