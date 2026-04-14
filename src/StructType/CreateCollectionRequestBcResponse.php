<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCollectionRequestBcResponse StructType
 */
#[\AllowDynamicProperties]
class CreateCollectionRequestBcResponse extends AbstractStructBase
{
    /**
     * The CreateCollectionRequestBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $CreateCollectionRequestBcResult = null;

    /**
     * Constructor method for CreateCollectionRequestBcResponse
     *
     * @uses CreateCollectionRequestBcResponse::setCreateCollectionRequestBcResult()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $createCollectionRequestBcResult = null)
    {
        $this
            ->setCreateCollectionRequestBcResult($createCollectionRequestBcResult)
        ;
    }

    /**
     * Get CreateCollectionRequestBcResult value
     */
    public function getCreateCollectionRequestBcResult(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc
    {
        return $this->CreateCollectionRequestBcResult;
    }

    /**
     * Set CreateCollectionRequestBcResult value
     */
    public function setCreateCollectionRequestBcResult(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipmentBc $createCollectionRequestBcResult = null): self
    {
        $this->CreateCollectionRequestBcResult = $createCollectionRequestBcResult;

        return $this;
    }
}
