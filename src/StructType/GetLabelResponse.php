<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelResponse StructType
 */
#[\AllowDynamicProperties]
class GetLabelResponse extends AbstractStructBase
{
    /**
     * The GetLabelResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?LabelResponse $GetLabelResult = null;

    /**
     * Constructor method for GetLabelResponse
     *
     * @uses GetLabelResponse::setGetLabelResult()
     */
    public function __construct(?LabelResponse $getLabelResult = null)
    {
        $this
            ->setGetLabelResult($getLabelResult)
        ;
    }

    /**
     * Get GetLabelResult value
     */
    public function getGetLabelResult(): ?LabelResponse
    {
        return $this->GetLabelResult;
    }

    /**
     * Set GetLabelResult value
     */
    public function setGetLabelResult(?LabelResponse $getLabelResult = null): self
    {
        $this->GetLabelResult = $getLabelResult;

        return $this;
    }
}
