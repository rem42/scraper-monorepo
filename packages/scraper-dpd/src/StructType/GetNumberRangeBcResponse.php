<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNumberRangeBcResponse StructType
 */
#[\AllowDynamicProperties]
class GetNumberRangeBcResponse extends AbstractStructBase
{
    /**
     * The GetNumberRangeBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?NumberRangeBcResponse $GetNumberRangeBcResult = null;

    /**
     * Constructor method for GetNumberRangeBcResponse
     *
     * @uses GetNumberRangeBcResponse::setGetNumberRangeBcResult()
     */
    public function __construct(?NumberRangeBcResponse $getNumberRangeBcResult = null)
    {
        $this
            ->setGetNumberRangeBcResult($getNumberRangeBcResult)
        ;
    }

    /**
     * Get GetNumberRangeBcResult value
     */
    public function getGetNumberRangeBcResult(): ?NumberRangeBcResponse
    {
        return $this->GetNumberRangeBcResult;
    }

    /**
     * Set GetNumberRangeBcResult value
     */
    public function setGetNumberRangeBcResult(?NumberRangeBcResponse $getNumberRangeBcResult = null): self
    {
        $this->GetNumberRangeBcResult = $getNumberRangeBcResult;

        return $this;
    }
}
