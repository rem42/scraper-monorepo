<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for UpdateRdvShipmentDataRequest StructType
 */
#[\AllowDynamicProperties]
class UpdateRdvShipmentDataRequest extends UpdateRdvShipmentData
{
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?RdvAddress $Address = null;
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
     * Constructor method for UpdateRdvShipmentDataRequest
     *
     * @uses UpdateRdvShipmentDataRequest::setAddress()
     * @uses UpdateRdvShipmentDataRequest::setDeliveryInfo()
     * @uses UpdateRdvShipmentDataRequest::setEsnInfo()
     * @uses UpdateRdvShipmentDataRequest::setAdditionalData()
     */
    public function __construct(?RdvAddress $address = null, ?RdvDeliveryInfo $deliveryInfo = null, ?RdvEsnInfo $esnInfo = null, ?RdvData $additionalData = null)
    {
        $this
            ->setAddress($address)
            ->setDeliveryInfo($deliveryInfo)
            ->setEsnInfo($esnInfo)
            ->setAdditionalData($additionalData)
        ;
    }

    /**
     * Get Address value
     */
    public function getAddress(): ?RdvAddress
    {
        return $this->Address;
    }

    /**
     * Set Address value
     */
    public function setAddress(?RdvAddress $address = null): self
    {
        $this->Address = $address;

        return $this;
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
