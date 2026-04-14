<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ParcelBcIdRequest StructType
 */
#[\AllowDynamicProperties]
class ParcelBcIdRequest extends BcIdBaseRequest
{
    /**
     * The Parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Parcel $Parcel = null;

    /**
     * Constructor method for ParcelBcIdRequest
     *
     * @uses ParcelBcIdRequest::setParcel()
     */
    public function __construct(?Parcel $parcel = null)
    {
        $this
            ->setParcel($parcel)
        ;
    }

    /**
     * Get Parcel value
     */
    public function getParcel(): ?Parcel
    {
        return $this->Parcel;
    }

    /**
     * Set Parcel value
     */
    public function setParcel(?Parcel $parcel = null): self
    {
        $this->Parcel = $parcel;

        return $this;
    }
}
