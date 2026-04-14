<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentDataForPredict StructType
 */
#[\AllowDynamicProperties]
class UpdateRdvShipmentDataForPredict extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?UpdateRdvShipmentDataPredictRequest $request = null;

    /**
     * Constructor method for UpdateRdvShipmentDataForPredict
     *
     * @uses UpdateRdvShipmentDataForPredict::setRequest()
     */
    public function __construct(?UpdateRdvShipmentDataPredictRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?UpdateRdvShipmentDataPredictRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?UpdateRdvShipmentDataPredictRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
