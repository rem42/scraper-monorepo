<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelBaseResponse StructType
 */
#[\AllowDynamicProperties]
class LabelBaseResponse extends AbstractStructBase
{
    /**
     * The labels
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null;

    /**
     * Constructor method for LabelBaseResponse
     *
     * @uses LabelBaseResponse::setLabels()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null)
    {
        $this
            ->setLabels($labels)
        ;
    }

    /**
     * Get labels value
     */
    public function getLabels(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel
    {
        return $this->labels;
    }

    /**
     * Set labels value
     */
    public function setLabels(?\Scraper\ScraperDPD\ArrayType\ArrayOfLabel $labels = null): self
    {
        $this->labels = $labels;

        return $this;
    }
}
