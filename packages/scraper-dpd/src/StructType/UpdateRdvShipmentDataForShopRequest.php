<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for UpdateRdvShipmentDataForShopRequest StructType
 */
#[\AllowDynamicProperties]
class UpdateRdvShipmentDataForShopRequest extends UpdateRdvShipmentData
{
    /**
     * The ShopID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ShopID = null;
    /**
     * The Receiver_ContactName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Receiver_ContactName = null;
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
     * Constructor method for UpdateRdvShipmentDataForShopRequest
     *
     * @uses UpdateRdvShipmentDataForShopRequest::setShopID()
     * @uses UpdateRdvShipmentDataForShopRequest::setReceiver_ContactName()
     * @uses UpdateRdvShipmentDataForShopRequest::setDeliveryDate()
     * @uses UpdateRdvShipmentDataForShopRequest::setEsnInfo()
     */
    public function __construct(?string $shopID = null, ?string $receiver_ContactName = null, ?string $deliveryDate = null, ?RdvEsnInfo $esnInfo = null)
    {
        $this
            ->setShopID($shopID)
            ->setReceiver_ContactName($receiver_ContactName)
            ->setDeliveryDate($deliveryDate)
            ->setEsnInfo($esnInfo)
        ;
    }

    /**
     * Get ShopID value
     */
    public function getShopID(): ?string
    {
        return $this->ShopID;
    }

    /**
     * Set ShopID value
     */
    public function setShopID(?string $shopID = null): self
    {
        // validation for constraint: string
        if (null !== $shopID && !\is_string($shopID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shopID, true), \gettype($shopID)), __LINE__);
        }
        $this->ShopID = $shopID;

        return $this;
    }

    /**
     * Get Receiver_ContactName value
     */
    public function getReceiver_ContactName(): ?string
    {
        return $this->Receiver_ContactName;
    }

    /**
     * Set Receiver_ContactName value
     */
    public function setReceiver_ContactName(?string $receiver_ContactName = null): self
    {
        // validation for constraint: string
        if (null !== $receiver_ContactName && !\is_string($receiver_ContactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiver_ContactName, true), \gettype($receiver_ContactName)), __LINE__);
        }
        $this->Receiver_ContactName = $receiver_ContactName;

        return $this;
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
