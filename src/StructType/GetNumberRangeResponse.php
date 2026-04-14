<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNumberRangeResponse StructType
 */
#[\AllowDynamicProperties]
class GetNumberRangeResponse extends AbstractStructBase
{
    /**
     * The GetNumberRangeResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?NumberRangeResponse $GetNumberRangeResult = null;

    /**
     * Constructor method for GetNumberRangeResponse
     *
     * @uses GetNumberRangeResponse::setGetNumberRangeResult()
     */
    public function __construct(?NumberRangeResponse $getNumberRangeResult = null)
    {
        $this
            ->setGetNumberRangeResult($getNumberRangeResult)
        ;
    }

    /**
     * Get GetNumberRangeResult value
     */
    public function getGetNumberRangeResult(): ?NumberRangeResponse
    {
        return $this->GetNumberRangeResult;
    }

    /**
     * Set GetNumberRangeResult value
     */
    public function setGetNumberRangeResult(?NumberRangeResponse $getNumberRangeResult = null): self
    {
        $this->GetNumberRangeResult = $getNumberRangeResult;

        return $this;
    }
}
