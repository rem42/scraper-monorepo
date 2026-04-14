<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourShipmentDataBcResponse StructType
 */
#[\AllowDynamicProperties]
class GetRetourShipmentDataBcResponse extends AbstractStructBase
{
    /**
     * The GetRetourShipmentDataBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?RetourShipmentDataBc $GetRetourShipmentDataBcResult = null;

    /**
     * Constructor method for GetRetourShipmentDataBcResponse
     *
     * @uses GetRetourShipmentDataBcResponse::setGetRetourShipmentDataBcResult()
     */
    public function __construct(?RetourShipmentDataBc $getRetourShipmentDataBcResult = null)
    {
        $this
            ->setGetRetourShipmentDataBcResult($getRetourShipmentDataBcResult)
        ;
    }

    /**
     * Get GetRetourShipmentDataBcResult value
     */
    public function getGetRetourShipmentDataBcResult(): ?RetourShipmentDataBc
    {
        return $this->GetRetourShipmentDataBcResult;
    }

    /**
     * Set GetRetourShipmentDataBcResult value
     */
    public function setGetRetourShipmentDataBcResult(?RetourShipmentDataBc $getRetourShipmentDataBcResult = null): self
    {
        $this->GetRetourShipmentDataBcResult = $getRetourShipmentDataBcResult;

        return $this;
    }
}
