<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ReceiveRetourLabelRequestBase StructType
 */
#[\AllowDynamicProperties]
abstract class ReceiveRetourLabelRequestBase extends ReceiveLabelRequestBase
{
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?RetourServices $services = null;
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $weight = null;
    /**
     * The shipperaddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Address $shipperaddress = null;
    /**
     * The receiveraddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Address $receiveraddress = null;
    /**
     * The customLabelText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $customLabelText = null;

    /**
     * Constructor method for ReceiveRetourLabelRequestBase
     *
     * @uses ReceiveRetourLabelRequestBase::setServices()
     * @uses ReceiveRetourLabelRequestBase::setWeight()
     * @uses ReceiveRetourLabelRequestBase::setShipperaddress()
     * @uses ReceiveRetourLabelRequestBase::setReceiveraddress()
     * @uses ReceiveRetourLabelRequestBase::setCustomLabelText()
     */
    public function __construct(?RetourServices $services = null, ?string $weight = null, ?Address $shipperaddress = null, ?Address $receiveraddress = null, ?string $customLabelText = null)
    {
        $this
            ->setServices($services)
            ->setWeight($weight)
            ->setShipperaddress($shipperaddress)
            ->setReceiveraddress($receiveraddress)
            ->setCustomLabelText($customLabelText)
        ;
    }

    /**
     * Get services value
     */
    public function getServices(): ?RetourServices
    {
        return $this->services;
    }

    /**
     * Set services value
     */
    public function setServices(?RetourServices $services = null): self
    {
        $this->services = $services;

        return $this;
    }

    /**
     * Get weight value
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }

    /**
     * Set weight value
     */
    public function setWeight(?string $weight = null): self
    {
        // validation for constraint: string
        if (null !== $weight && !\is_string($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), \gettype($weight)), __LINE__);
        }
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get shipperaddress value
     */
    public function getShipperaddress(): ?Address
    {
        return $this->shipperaddress;
    }

    /**
     * Set shipperaddress value
     */
    public function setShipperaddress(?Address $shipperaddress = null): self
    {
        $this->shipperaddress = $shipperaddress;

        return $this;
    }

    /**
     * Get receiveraddress value
     */
    public function getReceiveraddress(): ?Address
    {
        return $this->receiveraddress;
    }

    /**
     * Set receiveraddress value
     */
    public function setReceiveraddress(?Address $receiveraddress = null): self
    {
        $this->receiveraddress = $receiveraddress;

        return $this;
    }

    /**
     * Get customLabelText value
     */
    public function getCustomLabelText(): ?string
    {
        return $this->customLabelText;
    }

    /**
     * Set customLabelText value
     */
    public function setCustomLabelText(?string $customLabelText = null): self
    {
        // validation for constraint: string
        if (null !== $customLabelText && !\is_string($customLabelText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customLabelText, true), \gettype($customLabelText)), __LINE__);
        }
        $this->customLabelText = $customLabelText;

        return $this;
    }
}
