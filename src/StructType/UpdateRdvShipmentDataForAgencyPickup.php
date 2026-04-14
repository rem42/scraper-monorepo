<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentDataForAgencyPickup StructType
 */
#[\AllowDynamicProperties]
class UpdateRdvShipmentDataForAgencyPickup extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?UpdateRdvShipmentDataForAgencyPickupRequest $request = null;

    /**
     * Constructor method for UpdateRdvShipmentDataForAgencyPickup
     *
     * @uses UpdateRdvShipmentDataForAgencyPickup::setRequest()
     */
    public function __construct(?UpdateRdvShipmentDataForAgencyPickupRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?UpdateRdvShipmentDataForAgencyPickupRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?UpdateRdvShipmentDataForAgencyPickupRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
