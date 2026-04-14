<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetParcel StructType
 */
#[\AllowDynamicProperties]
class GetParcel extends AbstractStructBase
{
    /**
     * The GetParcelRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?GetParcelRequest $GetParcelRequest;

    /**
     * Constructor method for GetParcel
     *
     * @uses GetParcel::setGetParcelRequest()
     */
    public function __construct(?GetParcelRequest $getParcelRequest)
    {
        $this
            ->setGetParcelRequest($getParcelRequest)
        ;
    }

    /**
     * Get GetParcelRequest value
     */
    public function getGetParcelRequest(): GetParcelRequest
    {
        return $this->GetParcelRequest;
    }

    /**
     * Set GetParcelRequest value
     */
    public function setGetParcelRequest(?GetParcelRequest $getParcelRequest): self
    {
        $this->GetParcelRequest = $getParcelRequest;

        return $this;
    }
}
