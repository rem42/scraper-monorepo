<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastNumberResponse StructType
 */
#[\AllowDynamicProperties]
class GetLastNumberResponse extends AbstractStructBase
{
    /**
     * The GetLastNumberResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetLastNumberResponse $GetLastNumberResult = null;
    /**
     * The entries
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfLong $entries = null;

    /**
     * Constructor method for GetLastNumberResponse
     *
     * @uses GetLastNumberResponse::setGetLastNumberResult()
     * @uses GetLastNumberResponse::setEntries()
     */
    public function __construct(?self $getLastNumberResult = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfLong $entries = null)
    {
        $this
            ->setGetLastNumberResult($getLastNumberResult)
            ->setEntries($entries)
        ;
    }

    /**
     * Get GetLastNumberResult value
     */
    public function getGetLastNumberResult(): ?self
    {
        return $this->GetLastNumberResult;
    }

    /**
     * Set GetLastNumberResult value
     */
    public function setGetLastNumberResult(?self $getLastNumberResult = null): self
    {
        $this->GetLastNumberResult = $getLastNumberResult;

        return $this;
    }

    /**
     * Get entries value
     */
    public function getEntries(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfLong
    {
        return $this->entries;
    }

    /**
     * Set entries value
     */
    public function setEntries(?\Scraper\ScraperDPD\ArrayType\ArrayOfLong $entries = null): self
    {
        $this->entries = $entries;

        return $this;
    }
}
