<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionValuesResponse StructType
 */
#[\AllowDynamicProperties]
class GetOptionValuesResponse extends AbstractStructBase
{
    /**
     * The GetOptionValuesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetOptionsResponse $GetOptionValuesResult = null;

    /**
     * Constructor method for GetOptionValuesResponse
     *
     * @uses GetOptionValuesResponse::setGetOptionValuesResult()
     */
    public function __construct(?GetOptionsResponse $getOptionValuesResult = null)
    {
        $this
            ->setGetOptionValuesResult($getOptionValuesResult)
        ;
    }

    /**
     * Get GetOptionValuesResult value
     */
    public function getGetOptionValuesResult(): ?GetOptionsResponse
    {
        return $this->GetOptionValuesResult;
    }

    /**
     * Set GetOptionValuesResult value
     */
    public function setGetOptionValuesResult(?GetOptionsResponse $getOptionValuesResult = null): self
    {
        $this->GetOptionValuesResult = $getOptionValuesResult;

        return $this;
    }
}
