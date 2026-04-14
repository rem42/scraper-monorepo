<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentDataForSafePlace StructType
 */
#[\AllowDynamicProperties]
class UpdateRdvShipmentDataForSafePlace extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?UpdateRdvShipmentDataForSafePlaceRequest $request = null;

    /**
     * Constructor method for UpdateRdvShipmentDataForSafePlace
     *
     * @uses UpdateRdvShipmentDataForSafePlace::setRequest()
     */
    public function __construct(?UpdateRdvShipmentDataForSafePlaceRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?UpdateRdvShipmentDataForSafePlaceRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?UpdateRdvShipmentDataForSafePlaceRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
