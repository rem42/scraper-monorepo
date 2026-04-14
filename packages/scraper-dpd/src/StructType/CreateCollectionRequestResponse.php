<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCollectionRequestResponse StructType
 */
#[\AllowDynamicProperties]
class CreateCollectionRequestResponse extends AbstractStructBase
{
    /**
     * The CreateCollectionRequestResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $CreateCollectionRequestResult = null;

    /**
     * Constructor method for CreateCollectionRequestResponse
     *
     * @uses CreateCollectionRequestResponse::setCreateCollectionRequestResult()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $createCollectionRequestResult = null)
    {
        $this
            ->setCreateCollectionRequestResult($createCollectionRequestResult)
        ;
    }

    /**
     * Get CreateCollectionRequestResult value
     */
    public function getCreateCollectionRequestResult(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment
    {
        return $this->CreateCollectionRequestResult;
    }

    /**
     * Set CreateCollectionRequestResult value
     */
    public function setCreateCollectionRequestResult(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipment $createCollectionRequestResult = null): self
    {
        $this->CreateCollectionRequestResult = $createCollectionRequestResult;

        return $this;
    }
}
