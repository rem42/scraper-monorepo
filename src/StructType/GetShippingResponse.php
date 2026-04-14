<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShippingResponse StructType
 */
#[\AllowDynamicProperties]
class GetShippingResponse extends AbstractStructBase
{
    /**
     * The GetShippingResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetShippingResponse $GetShippingResult = null;
    /**
     * The shippings
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipping $shippings = null;

    /**
     * Constructor method for GetShippingResponse
     *
     * @uses GetShippingResponse::setGetShippingResult()
     * @uses GetShippingResponse::setShippings()
     */
    public function __construct(?self $getShippingResult = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipping $shippings = null)
    {
        $this
            ->setGetShippingResult($getShippingResult)
            ->setShippings($shippings)
        ;
    }

    /**
     * Get GetShippingResult value
     */
    public function getGetShippingResult(): ?self
    {
        return $this->GetShippingResult;
    }

    /**
     * Set GetShippingResult value
     */
    public function setGetShippingResult(?self $getShippingResult = null): self
    {
        $this->GetShippingResult = $getShippingResult;

        return $this;
    }

    /**
     * Get shippings value
     */
    public function getShippings(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfShipping
    {
        return $this->shippings;
    }

    /**
     * Set shippings value
     */
    public function setShippings(?\Scraper\ScraperDPD\ArrayType\ArrayOfShipping $shippings = null): self
    {
        $this->shippings = $shippings;

        return $this;
    }
}
