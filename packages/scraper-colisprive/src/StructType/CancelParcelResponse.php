<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelParcelResponse StructType
 */
#[\AllowDynamicProperties]
class CancelParcelResponse extends AbstractStructBase
{
    /**
     * The CancelParcelResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?CancelParcelReturn $CancelParcelResult = null;

    /**
     * Constructor method for CancelParcelResponse
     *
     * @uses CancelParcelResponse::setCancelParcelResult()
     */
    public function __construct(?CancelParcelReturn $cancelParcelResult = null)
    {
        $this
            ->setCancelParcelResult($cancelParcelResult)
        ;
    }

    /**
     * Get CancelParcelResult value
     */
    public function getCancelParcelResult(): ?CancelParcelReturn
    {
        return $this->CancelParcelResult;
    }

    /**
     * Set CancelParcelResult value
     */
    public function setCancelParcelResult(?CancelParcelReturn $cancelParcelResult = null): self
    {
        $this->CancelParcelResult = $cancelParcelResult;

        return $this;
    }
}
