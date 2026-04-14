<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetParcel StructType
 */
#[\AllowDynamicProperties]
class SetParcel extends AbstractStructBase
{
    /**
     * The SetParcelRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?SetParcelRequest $SetParcelRequest;

    /**
     * Constructor method for SetParcel
     *
     * @uses SetParcel::setSetParcelRequest()
     */
    public function __construct(?SetParcelRequest $setParcelRequest)
    {
        $this
            ->setSetParcelRequest($setParcelRequest)
        ;
    }

    /**
     * Get SetParcelRequest value
     */
    public function getSetParcelRequest(): SetParcelRequest
    {
        return $this->SetParcelRequest;
    }

    /**
     * Set SetParcelRequest value
     */
    public function setSetParcelRequest(?SetParcelRequest $setParcelRequest): self
    {
        $this->SetParcelRequest = $setParcelRequest;

        return $this;
    }
}
