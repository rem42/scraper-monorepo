<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionsResponse StructType
 */
#[\AllowDynamicProperties]
class GetOptionsResponse extends AbstractStructBase
{
    /**
     * The Options
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfGetOptionResponse $Options = null;

    /**
     * Constructor method for GetOptionsResponse
     *
     * @uses GetOptionsResponse::setOptions()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfGetOptionResponse $options = null)
    {
        $this
            ->setOptions($options)
        ;
    }

    /**
     * Get Options value
     */
    public function getOptions(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfGetOptionResponse
    {
        return $this->Options;
    }

    /**
     * Set Options value
     */
    public function setOptions(?\Scraper\ScraperDPD\ArrayType\ArrayOfGetOptionResponse $options = null): self
    {
        $this->Options = $options;

        return $this;
    }
}
