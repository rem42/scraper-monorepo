<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for UpdateRdvShipmentDataForSafePlaceResponse StructType
 */
#[\AllowDynamicProperties]
class UpdateRdvShipmentDataForSafePlaceResponse extends UpdateRdvShipmentDataResponse
{
    /**
     * The UpdateRdvShipmentDataForSafePlaceResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?UpdateRdvShipmentDataForSafePlaceResponse $UpdateRdvShipmentDataForSafePlaceResult = null;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Code = null;
    /**
     * The Barcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Barcode = null;

    /**
     * Constructor method for UpdateRdvShipmentDataForSafePlaceResponse
     *
     * @uses UpdateRdvShipmentDataForSafePlaceResponse::setUpdateRdvShipmentDataForSafePlaceResult()
     * @uses UpdateRdvShipmentDataForSafePlaceResponse::setCode()
     * @uses UpdateRdvShipmentDataForSafePlaceResponse::setBarcode()
     */
    public function __construct(?self $updateRdvShipmentDataForSafePlaceResult = null, ?string $code = null, ?string $barcode = null)
    {
        $this
            ->setUpdateRdvShipmentDataForSafePlaceResult($updateRdvShipmentDataForSafePlaceResult)
            ->setCode($code)
            ->setBarcode($barcode)
        ;
    }

    /**
     * Get UpdateRdvShipmentDataForSafePlaceResult value
     */
    public function getUpdateRdvShipmentDataForSafePlaceResult(): ?self
    {
        return $this->UpdateRdvShipmentDataForSafePlaceResult;
    }

    /**
     * Set UpdateRdvShipmentDataForSafePlaceResult value
     */
    public function setUpdateRdvShipmentDataForSafePlaceResult(?self $updateRdvShipmentDataForSafePlaceResult = null): self
    {
        $this->UpdateRdvShipmentDataForSafePlaceResult = $updateRdvShipmentDataForSafePlaceResult;

        return $this;
    }

    /**
     * Get Code value
     */
    public function getCode(): ?string
    {
        return $this->Code;
    }

    /**
     * Set Code value
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (null !== $code && !\is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), \gettype($code)), __LINE__);
        }
        $this->Code = $code;

        return $this;
    }

    /**
     * Get Barcode value
     */
    public function getBarcode(): ?string
    {
        return $this->Barcode;
    }

    /**
     * Set Barcode value
     */
    public function setBarcode(?string $barcode = null): self
    {
        // validation for constraint: string
        if (null !== $barcode && !\is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcode, true), \gettype($barcode)), __LINE__);
        }
        $this->Barcode = $barcode;

        return $this;
    }
}
