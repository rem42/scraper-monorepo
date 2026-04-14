<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionValueResponse StructType
 */
#[\AllowDynamicProperties]
class GetOptionValueResponse extends AbstractStructBase
{
    /**
     * The GetOptionValueResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetOptionResponse $GetOptionValueResult = null;

    /**
     * Constructor method for GetOptionValueResponse
     *
     * @uses GetOptionValueResponse::setGetOptionValueResult()
     */
    public function __construct(?GetOptionResponse $getOptionValueResult = null)
    {
        $this
            ->setGetOptionValueResult($getOptionValueResult)
        ;
    }

    /**
     * Get GetOptionValueResult value
     */
    public function getGetOptionValueResult(): ?GetOptionResponse
    {
        return $this->GetOptionValueResult;
    }

    /**
     * Set GetOptionValueResult value
     */
    public function setGetOptionValueResult(?GetOptionResponse $getOptionValueResult = null): self
    {
        $this->GetOptionValueResult = $getOptionValueResult;

        return $this;
    }
}
