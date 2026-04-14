<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourShipmentDataResponse StructType
 */
#[\AllowDynamicProperties]
class GetRetourShipmentDataResponse extends AbstractStructBase
{
    /**
     * The GetRetourShipmentDataResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?RetourShipmentData $GetRetourShipmentDataResult = null;

    /**
     * Constructor method for GetRetourShipmentDataResponse
     *
     * @uses GetRetourShipmentDataResponse::setGetRetourShipmentDataResult()
     */
    public function __construct(?RetourShipmentData $getRetourShipmentDataResult = null)
    {
        $this
            ->setGetRetourShipmentDataResult($getRetourShipmentDataResult)
        ;
    }

    /**
     * Get GetRetourShipmentDataResult value
     */
    public function getGetRetourShipmentDataResult(): ?RetourShipmentData
    {
        return $this->GetRetourShipmentDataResult;
    }

    /**
     * Set GetRetourShipmentDataResult value
     */
    public function setGetRetourShipmentDataResult(?RetourShipmentData $getRetourShipmentDataResult = null): self
    {
        $this->GetRetourShipmentDataResult = $getRetourShipmentDataResult;

        return $this;
    }
}
