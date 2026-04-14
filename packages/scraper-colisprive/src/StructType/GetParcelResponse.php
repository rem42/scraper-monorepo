<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetParcelResponse StructType
 */
#[\AllowDynamicProperties]
class GetParcelResponse extends AbstractStructBase
{
    /**
     * The GetParcelResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetParcelReturn $GetParcelResult = null;

    /**
     * Constructor method for GetParcelResponse
     *
     * @uses GetParcelResponse::setGetParcelResult()
     */
    public function __construct(?GetParcelReturn $getParcelResult = null)
    {
        $this
            ->setGetParcelResult($getParcelResult)
        ;
    }

    /**
     * Get GetParcelResult value
     */
    public function getGetParcelResult(): ?GetParcelReturn
    {
        return $this->GetParcelResult;
    }

    /**
     * Set GetParcelResult value
     */
    public function setGetParcelResult(?GetParcelReturn $getParcelResult = null): self
    {
        $this->GetParcelResult = $getParcelResult;

        return $this;
    }
}
