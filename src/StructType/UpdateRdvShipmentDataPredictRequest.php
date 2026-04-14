<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for UpdateRdvShipmentDataPredictRequest StructType
 */
#[\AllowDynamicProperties]
class UpdateRdvShipmentDataPredictRequest extends UpdateRdvShipmentData
{
    /**
     * The DeliveryInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?RdvDeliveryInfo $DeliveryInfo = null;
    /**
     * The EsnInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?RdvEsnInfo $EsnInfo = null;
    /**
     * The AdditionalData
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?RdvData $AdditionalData = null;

    /**
     * Constructor method for UpdateRdvShipmentDataPredictRequest
     *
     * @uses UpdateRdvShipmentDataPredictRequest::setDeliveryInfo()
     * @uses UpdateRdvShipmentDataPredictRequest::setEsnInfo()
     * @uses UpdateRdvShipmentDataPredictRequest::setAdditionalData()
     */
    public function __construct(?RdvDeliveryInfo $deliveryInfo = null, ?RdvEsnInfo $esnInfo = null, ?RdvData $additionalData = null)
    {
        $this
            ->setDeliveryInfo($deliveryInfo)
            ->setEsnInfo($esnInfo)
            ->setAdditionalData($additionalData)
        ;
    }

    /**
     * Get DeliveryInfo value
     */
    public function getDeliveryInfo(): ?RdvDeliveryInfo
    {
        return $this->DeliveryInfo;
    }

    /**
     * Set DeliveryInfo value
     */
    public function setDeliveryInfo(?RdvDeliveryInfo $deliveryInfo = null): self
    {
        $this->DeliveryInfo = $deliveryInfo;

        return $this;
    }

    /**
     * Get EsnInfo value
     */
    public function getEsnInfo(): ?RdvEsnInfo
    {
        return $this->EsnInfo;
    }

    /**
     * Set EsnInfo value
     */
    public function setEsnInfo(?RdvEsnInfo $esnInfo = null): self
    {
        $this->EsnInfo = $esnInfo;

        return $this;
    }

    /**
     * Get AdditionalData value
     */
    public function getAdditionalData(): ?RdvData
    {
        return $this->AdditionalData;
    }

    /**
     * Set AdditionalData value
     */
    public function setAdditionalData(?RdvData $additionalData = null): self
    {
        $this->AdditionalData = $additionalData;

        return $this;
    }
}
