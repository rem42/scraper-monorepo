<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for UpdateRdvShipmentDataForSafePlaceRequest StructType
 */
#[\AllowDynamicProperties]
class UpdateRdvShipmentDataForSafePlaceRequest extends UpdateRdvShipmentData
{
    /**
     * The DeliveryInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?RdvDeliveryInfoSmall $DeliveryInfo = null;
    /**
     * The EsnInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?RdvEsnInfo $EsnInfo = null;
    /**
     * The Image
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Image = null;

    /**
     * Constructor method for UpdateRdvShipmentDataForSafePlaceRequest
     *
     * @uses UpdateRdvShipmentDataForSafePlaceRequest::setDeliveryInfo()
     * @uses UpdateRdvShipmentDataForSafePlaceRequest::setEsnInfo()
     * @uses UpdateRdvShipmentDataForSafePlaceRequest::setImage()
     */
    public function __construct(?RdvDeliveryInfoSmall $deliveryInfo = null, ?RdvEsnInfo $esnInfo = null, ?string $image = null)
    {
        $this
            ->setDeliveryInfo($deliveryInfo)
            ->setEsnInfo($esnInfo)
            ->setImage($image)
        ;
    }

    /**
     * Get DeliveryInfo value
     */
    public function getDeliveryInfo(): ?RdvDeliveryInfoSmall
    {
        return $this->DeliveryInfo;
    }

    /**
     * Set DeliveryInfo value
     */
    public function setDeliveryInfo(?RdvDeliveryInfoSmall $deliveryInfo = null): self
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
     * Get Image value
     */
    public function getImage(): ?string
    {
        return $this->Image;
    }

    /**
     * Set Image value
     */
    public function setImage(?string $image = null): self
    {
        // validation for constraint: string
        if (null !== $image && !\is_string($image)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($image, true), \gettype($image)), __LINE__);
        }
        $this->Image = $image;

        return $this;
    }
}
