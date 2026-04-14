<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRdvShipmentDataResponse StructType
 */
#[\AllowDynamicProperties]
class GetRdvShipmentDataResponse extends AbstractStructBase
{
    /**
     * The GetRdvShipmentDataResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfRdvShipmentData $GetRdvShipmentDataResult = null;

    /**
     * Constructor method for GetRdvShipmentDataResponse
     *
     * @uses GetRdvShipmentDataResponse::setGetRdvShipmentDataResult()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfRdvShipmentData $getRdvShipmentDataResult = null)
    {
        $this
            ->setGetRdvShipmentDataResult($getRdvShipmentDataResult)
        ;
    }

    /**
     * Get GetRdvShipmentDataResult value
     */
    public function getGetRdvShipmentDataResult(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfRdvShipmentData
    {
        return $this->GetRdvShipmentDataResult;
    }

    /**
     * Set GetRdvShipmentDataResult value
     */
    public function setGetRdvShipmentDataResult(?\Scraper\ScraperDPD\ArrayType\ArrayOfRdvShipmentData $getRdvShipmentDataResult = null): self
    {
        $this->GetRdvShipmentDataResult = $getRdvShipmentDataResult;

        return $this;
    }
}
