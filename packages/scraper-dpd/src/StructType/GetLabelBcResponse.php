<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelBcResponse StructType
 */
#[\AllowDynamicProperties]
class GetLabelBcResponse extends AbstractStructBase
{
    /**
     * The GetLabelBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?LabelBcResponse $GetLabelBcResult = null;

    /**
     * Constructor method for GetLabelBcResponse
     *
     * @uses GetLabelBcResponse::setGetLabelBcResult()
     */
    public function __construct(?LabelBcResponse $getLabelBcResult = null)
    {
        $this
            ->setGetLabelBcResult($getLabelBcResult)
        ;
    }

    /**
     * Get GetLabelBcResult value
     */
    public function getGetLabelBcResult(): ?LabelBcResponse
    {
        return $this->GetLabelBcResult;
    }

    /**
     * Set GetLabelBcResult value
     */
    public function setGetLabelBcResult(?LabelBcResponse $getLabelBcResult = null): self
    {
        $this->GetLabelBcResult = $getLabelBcResult;

        return $this;
    }
}
