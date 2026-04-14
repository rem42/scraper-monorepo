<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSecureDataResponse StructType
 */
#[\AllowDynamicProperties]
class GetSecureDataResponse extends AbstractStructBase
{
    /**
     * The GetSecureDataResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetSecureDataResponse $GetSecureDataResult = null;
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Data = null;
    /**
     * The SecureCodes
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfString $SecureCodes = null;
    /**
     * The BarcodeImage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $BarcodeImage = null;

    /**
     * Constructor method for GetSecureDataResponse
     *
     * @uses GetSecureDataResponse::setGetSecureDataResult()
     * @uses GetSecureDataResponse::setData()
     * @uses GetSecureDataResponse::setSecureCodes()
     * @uses GetSecureDataResponse::setBarcodeImage()
     */
    public function __construct(?self $getSecureDataResult = null, ?string $data = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfString $secureCodes = null, ?string $barcodeImage = null)
    {
        $this
            ->setGetSecureDataResult($getSecureDataResult)
            ->setData($data)
            ->setSecureCodes($secureCodes)
            ->setBarcodeImage($barcodeImage)
        ;
    }

    /**
     * Get GetSecureDataResult value
     */
    public function getGetSecureDataResult(): ?self
    {
        return $this->GetSecureDataResult;
    }

    /**
     * Set GetSecureDataResult value
     */
    public function setGetSecureDataResult(?self $getSecureDataResult = null): self
    {
        $this->GetSecureDataResult = $getSecureDataResult;

        return $this;
    }

    /**
     * Get Data value
     */
    public function getData(): ?string
    {
        return $this->Data;
    }

    /**
     * Set Data value
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (null !== $data && !\is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), \gettype($data)), __LINE__);
        }
        $this->Data = $data;

        return $this;
    }

    /**
     * Get SecureCodes value
     */
    public function getSecureCodes(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfString
    {
        return $this->SecureCodes;
    }

    /**
     * Set SecureCodes value
     */
    public function setSecureCodes(?\Scraper\ScraperDPD\ArrayType\ArrayOfString $secureCodes = null): self
    {
        $this->SecureCodes = $secureCodes;

        return $this;
    }

    /**
     * Get BarcodeImage value
     */
    public function getBarcodeImage(): ?string
    {
        return $this->BarcodeImage;
    }

    /**
     * Set BarcodeImage value
     */
    public function setBarcodeImage(?string $barcodeImage = null): self
    {
        // validation for constraint: string
        if (null !== $barcodeImage && !\is_string($barcodeImage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeImage, true), \gettype($barcodeImage)), __LINE__);
        }
        $this->BarcodeImage = $barcodeImage;

        return $this;
    }
}
