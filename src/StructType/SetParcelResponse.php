<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetParcelResponse StructType
 */
#[\AllowDynamicProperties]
class SetParcelResponse extends AbstractStructBase
{
    /**
     * The SetParcelResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?SetParcelReturn $SetParcelResult = null;

    /**
     * Constructor method for SetParcelResponse
     *
     * @uses SetParcelResponse::setSetParcelResult()
     */
    public function __construct(?SetParcelReturn $setParcelResult = null)
    {
        $this
            ->setSetParcelResult($setParcelResult)
        ;
    }

    /**
     * Get SetParcelResult value
     */
    public function getSetParcelResult(): ?SetParcelReturn
    {
        return $this->SetParcelResult;
    }

    /**
     * Set SetParcelResult value
     */
    public function setSetParcelResult(?SetParcelReturn $setParcelResult = null): self
    {
        $this->SetParcelResult = $setParcelResult;

        return $this;
    }
}
