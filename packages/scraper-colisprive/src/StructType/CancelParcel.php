<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelParcel StructType
 */
#[\AllowDynamicProperties]
class CancelParcel extends AbstractStructBase
{
    /**
     * The CancelParcelRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?CancelParcelRequest $CancelParcelRequest;

    /**
     * Constructor method for CancelParcel
     *
     * @uses CancelParcel::setCancelParcelRequest()
     */
    public function __construct(?CancelParcelRequest $cancelParcelRequest)
    {
        $this
            ->setCancelParcelRequest($cancelParcelRequest)
        ;
    }

    /**
     * Get CancelParcelRequest value
     */
    public function getCancelParcelRequest(): CancelParcelRequest
    {
        return $this->CancelParcelRequest;
    }

    /**
     * Set CancelParcelRequest value
     */
    public function setCancelParcelRequest(?CancelParcelRequest $cancelParcelRequest): self
    {
        $this->CancelParcelRequest = $cancelParcelRequest;

        return $this;
    }
}
