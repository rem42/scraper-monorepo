<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourLabelBcResponse StructType
 */
#[\AllowDynamicProperties]
class GetRetourLabelBcResponse extends AbstractStructBase
{
    /**
     * The GetRetourLabelBcResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?LabelResponse $GetRetourLabelBcResult = null;

    /**
     * Constructor method for GetRetourLabelBcResponse
     *
     * @uses GetRetourLabelBcResponse::setGetRetourLabelBcResult()
     */
    public function __construct(?LabelResponse $getRetourLabelBcResult = null)
    {
        $this
            ->setGetRetourLabelBcResult($getRetourLabelBcResult)
        ;
    }

    /**
     * Get GetRetourLabelBcResult value
     */
    public function getGetRetourLabelBcResult(): ?LabelResponse
    {
        return $this->GetRetourLabelBcResult;
    }

    /**
     * Set GetRetourLabelBcResult value
     */
    public function setGetRetourLabelBcResult(?LabelResponse $getRetourLabelBcResult = null): self
    {
        $this->GetRetourLabelBcResult = $getRetourLabelBcResult;

        return $this;
    }
}
