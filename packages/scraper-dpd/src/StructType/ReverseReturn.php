<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ReverseReturn StructType
 */
#[\AllowDynamicProperties]
class ReverseReturn extends ReverseReturnBase
{
    /**
     * The original_parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Parcel $original_parcel = null;

    /**
     * Constructor method for ReverseReturn
     *
     * @uses ReverseReturn::setOriginal_parcel()
     */
    public function __construct(?Parcel $original_parcel = null)
    {
        $this
            ->setOriginal_parcel($original_parcel)
        ;
    }

    /**
     * Get original_parcel value
     */
    public function getOriginal_parcel(): ?Parcel
    {
        return $this->original_parcel;
    }

    /**
     * Set original_parcel value
     */
    public function setOriginal_parcel(?Parcel $original_parcel = null): self
    {
        $this->original_parcel = $original_parcel;

        return $this;
    }
}
