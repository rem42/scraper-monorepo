<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelDataResponse StructType
 */
#[\AllowDynamicProperties]
class GetLabelDataResponse extends AbstractStructBase
{
    /**
     * The GetLabelDataResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetLabelDataResponse $GetLabelDataResult = null;
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?LabelData $Data = null;
    /**
     * The BarcodeData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfBarcodeData $BarcodeData = null;

    /**
     * Constructor method for GetLabelDataResponse
     *
     * @uses GetLabelDataResponse::setGetLabelDataResult()
     * @uses GetLabelDataResponse::setData()
     * @uses GetLabelDataResponse::setBarcodeData()
     */
    public function __construct(?self $getLabelDataResult = null, ?LabelData $data = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfBarcodeData $barcodeData = null)
    {
        $this
            ->setGetLabelDataResult($getLabelDataResult)
            ->setData($data)
            ->setBarcodeData($barcodeData)
        ;
    }

    /**
     * Get GetLabelDataResult value
     */
    public function getGetLabelDataResult(): ?self
    {
        return $this->GetLabelDataResult;
    }

    /**
     * Set GetLabelDataResult value
     */
    public function setGetLabelDataResult(?self $getLabelDataResult = null): self
    {
        $this->GetLabelDataResult = $getLabelDataResult;

        return $this;
    }

    /**
     * Get Data value
     */
    public function getData(): ?LabelData
    {
        return $this->Data;
    }

    /**
     * Set Data value
     */
    public function setData(?LabelData $data = null): self
    {
        $this->Data = $data;

        return $this;
    }

    /**
     * Get BarcodeData value
     */
    public function getBarcodeData(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfBarcodeData
    {
        return $this->BarcodeData;
    }

    /**
     * Set BarcodeData value
     */
    public function setBarcodeData(?\Scraper\ScraperDPD\ArrayType\ArrayOfBarcodeData $barcodeData = null): self
    {
        $this->BarcodeData = $barcodeData;

        return $this;
    }
}
