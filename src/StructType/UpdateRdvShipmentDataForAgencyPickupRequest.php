<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for UpdateRdvShipmentDataForAgencyPickupRequest StructType
 */
#[\AllowDynamicProperties]
class UpdateRdvShipmentDataForAgencyPickupRequest extends UpdateRdvShipmentData
{
    /**
     * The DeliveryDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DeliveryDate = null;
    /**
     * The EsnInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?RdvEsnInfo $EsnInfo = null;

    /**
     * Constructor method for UpdateRdvShipmentDataForAgencyPickupRequest
     *
     * @uses UpdateRdvShipmentDataForAgencyPickupRequest::setDeliveryDate()
     * @uses UpdateRdvShipmentDataForAgencyPickupRequest::setEsnInfo()
     */
    public function __construct(?string $deliveryDate = null, ?RdvEsnInfo $esnInfo = null)
    {
        $this
            ->setDeliveryDate($deliveryDate)
            ->setEsnInfo($esnInfo)
        ;
    }

    /**
     * Get DeliveryDate value
     */
    public function getDeliveryDate(): ?string
    {
        return $this->DeliveryDate;
    }

    /**
     * Set DeliveryDate value
     */
    public function setDeliveryDate(?string $deliveryDate = null): self
    {
        // validation for constraint: string
        if (null !== $deliveryDate && !\is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryDate, true), \gettype($deliveryDate)), __LINE__);
        }
        $this->DeliveryDate = $deliveryDate;

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
}
