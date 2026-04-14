<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for RdvShipmentData StructType
 */
#[\AllowDynamicProperties]
class RdvShipmentData extends RdvShipmentDataBase
{
    /**
     * The Parcel
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ParcelInfoSin $Parcel = null;
    /**
     * The ShipmentSin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ShipmentSin = null;
    /**
     * The AvisDePassageSin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $AvisDePassageSin = null;

    /**
     * Constructor method for RdvShipmentData
     *
     * @uses RdvShipmentData::setParcel()
     * @uses RdvShipmentData::setShipmentSin()
     * @uses RdvShipmentData::setAvisDePassageSin()
     */
    public function __construct(?ParcelInfoSin $parcel = null, ?string $shipmentSin = null, ?string $avisDePassageSin = null)
    {
        $this
            ->setParcel($parcel)
            ->setShipmentSin($shipmentSin)
            ->setAvisDePassageSin($avisDePassageSin)
        ;
    }

    /**
     * Get Parcel value
     */
    public function getParcel(): ?ParcelInfoSin
    {
        return $this->Parcel;
    }

    /**
     * Set Parcel value
     */
    public function setParcel(?ParcelInfoSin $parcel = null): self
    {
        $this->Parcel = $parcel;

        return $this;
    }

    /**
     * Get ShipmentSin value
     */
    public function getShipmentSin(): ?string
    {
        return $this->ShipmentSin;
    }

    /**
     * Set ShipmentSin value
     */
    public function setShipmentSin(?string $shipmentSin = null): self
    {
        // validation for constraint: string
        if (null !== $shipmentSin && !\is_string($shipmentSin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentSin, true), \gettype($shipmentSin)), __LINE__);
        }
        $this->ShipmentSin = $shipmentSin;

        return $this;
    }

    /**
     * Get AvisDePassageSin value
     */
    public function getAvisDePassageSin(): ?string
    {
        return $this->AvisDePassageSin;
    }

    /**
     * Set AvisDePassageSin value
     */
    public function setAvisDePassageSin(?string $avisDePassageSin = null): self
    {
        // validation for constraint: string
        if (null !== $avisDePassageSin && !\is_string($avisDePassageSin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($avisDePassageSin, true), \gettype($avisDePassageSin)), __LINE__);
        }
        $this->AvisDePassageSin = $avisDePassageSin;

        return $this;
    }
}
