<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ReverseBcReturn StructType
 */
#[\AllowDynamicProperties]
class ReverseBcReturn extends ReverseReturnBase
{
    /**
     * The original_parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?BcData $original_parcel = null;

    /**
     * Constructor method for ReverseBcReturn
     *
     * @uses ReverseBcReturn::setOriginal_parcel()
     */
    public function __construct(?BcData $original_parcel = null)
    {
        $this
            ->setOriginal_parcel($original_parcel)
        ;
    }

    /**
     * Get original_parcel value
     */
    public function getOriginal_parcel(): ?BcData
    {
        return $this->original_parcel;
    }

    /**
     * Set original_parcel value
     */
    public function setOriginal_parcel(?BcData $original_parcel = null): self
    {
        $this->original_parcel = $original_parcel;

        return $this;
    }
}
