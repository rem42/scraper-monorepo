<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSafePlaceDataResponse StructType
 */
#[\AllowDynamicProperties]
class GetSafePlaceDataResponse extends AbstractStructBase
{
    /**
     * The GetSafePlaceDataResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetSafePlaceDataResponse $GetSafePlaceDataResult = null;
    /**
     * The Images
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfBase64Binary $Images = null;

    /**
     * Constructor method for GetSafePlaceDataResponse
     *
     * @uses GetSafePlaceDataResponse::setGetSafePlaceDataResult()
     * @uses GetSafePlaceDataResponse::setImages()
     */
    public function __construct(?self $getSafePlaceDataResult = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfBase64Binary $images = null)
    {
        $this
            ->setGetSafePlaceDataResult($getSafePlaceDataResult)
            ->setImages($images)
        ;
    }

    /**
     * Get GetSafePlaceDataResult value
     */
    public function getGetSafePlaceDataResult(): ?self
    {
        return $this->GetSafePlaceDataResult;
    }

    /**
     * Set GetSafePlaceDataResult value
     */
    public function setGetSafePlaceDataResult(?self $getSafePlaceDataResult = null): self
    {
        $this->GetSafePlaceDataResult = $getSafePlaceDataResult;

        return $this;
    }

    /**
     * Get Images value
     */
    public function getImages(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfBase64Binary
    {
        return $this->Images;
    }

    /**
     * Set Images value
     */
    public function setImages(?\Scraper\ScraperDPD\ArrayType\ArrayOfBase64Binary $images = null): self
    {
        $this->Images = $images;

        return $this;
    }
}
