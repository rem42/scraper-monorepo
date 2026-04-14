<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourLabelResponse StructType
 */
#[\AllowDynamicProperties]
class GetRetourLabelResponse extends AbstractStructBase
{
    /**
     * The GetRetourLabelResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?LabelResponse $GetRetourLabelResult = null;

    /**
     * Constructor method for GetRetourLabelResponse
     *
     * @uses GetRetourLabelResponse::setGetRetourLabelResult()
     */
    public function __construct(?LabelResponse $getRetourLabelResult = null)
    {
        $this
            ->setGetRetourLabelResult($getRetourLabelResult)
        ;
    }

    /**
     * Get GetRetourLabelResult value
     */
    public function getGetRetourLabelResult(): ?LabelResponse
    {
        return $this->GetRetourLabelResult;
    }

    /**
     * Set GetRetourLabelResult value
     */
    public function setGetRetourLabelResult(?LabelResponse $getRetourLabelResult = null): self
    {
        $this->GetRetourLabelResult = $getRetourLabelResult;

        return $this;
    }
}
