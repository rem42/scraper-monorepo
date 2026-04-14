<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPropertiesResponse StructType
 */
#[\AllowDynamicProperties]
class GetPropertiesResponse extends AbstractStructBase
{
    /**
     * The GetPropertiesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetPropertiesResponse $GetPropertiesResult = null;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfPropertyDefinition $Properties = null;

    /**
     * Constructor method for GetPropertiesResponse
     *
     * @uses GetPropertiesResponse::setGetPropertiesResult()
     * @uses GetPropertiesResponse::setProperties()
     */
    public function __construct(?self $getPropertiesResult = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfPropertyDefinition $properties = null)
    {
        $this
            ->setGetPropertiesResult($getPropertiesResult)
            ->setProperties($properties)
        ;
    }

    /**
     * Get GetPropertiesResult value
     */
    public function getGetPropertiesResult(): ?self
    {
        return $this->GetPropertiesResult;
    }

    /**
     * Set GetPropertiesResult value
     */
    public function setGetPropertiesResult(?self $getPropertiesResult = null): self
    {
        $this->GetPropertiesResult = $getPropertiesResult;

        return $this;
    }

    /**
     * Get Properties value
     */
    public function getProperties(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfPropertyDefinition
    {
        return $this->Properties;
    }

    /**
     * Set Properties value
     */
    public function setProperties(?\Scraper\ScraperDPD\ArrayType\ArrayOfPropertyDefinition $properties = null): self
    {
        $this->Properties = $properties;

        return $this;
    }
}
