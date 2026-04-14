<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ReverseShipmentLabelRequest StructType
 */
#[\AllowDynamicProperties]
class ReverseShipmentLabelRequest extends ReverseShipmentRequest
{
    /**
     * The refasbarcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $refasbarcode;
    /**
     * The receiver_contact_name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $receiver_contact_name = null;
    /**
     * The customLabelText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $customLabelText = null;
    /**
     * The labelType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?LabelType $labelType = null;

    /**
     * Constructor method for ReverseShipmentLabelRequest
     *
     * @uses ReverseShipmentLabelRequest::setRefasbarcode()
     * @uses ReverseShipmentLabelRequest::setReceiver_contact_name()
     * @uses ReverseShipmentLabelRequest::setCustomLabelText()
     * @uses ReverseShipmentLabelRequest::setLabelType()
     */
    public function __construct(bool $refasbarcode, ?string $receiver_contact_name = null, ?string $customLabelText = null, ?LabelType $labelType = null)
    {
        $this
            ->setRefasbarcode($refasbarcode)
            ->setReceiver_contact_name($receiver_contact_name)
            ->setCustomLabelText($customLabelText)
            ->setLabelType($labelType)
        ;
    }

    /**
     * Get refasbarcode value
     */
    public function getRefasbarcode(): bool
    {
        return $this->refasbarcode;
    }

    /**
     * Set refasbarcode value
     */
    public function setRefasbarcode(bool $refasbarcode): self
    {
        // validation for constraint: boolean
        if (null !== $refasbarcode && !\is_bool($refasbarcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refasbarcode, true), \gettype($refasbarcode)), __LINE__);
        }
        $this->refasbarcode = $refasbarcode;

        return $this;
    }

    /**
     * Get receiver_contact_name value
     */
    public function getReceiver_contact_name(): ?string
    {
        return $this->receiver_contact_name;
    }

    /**
     * Set receiver_contact_name value
     */
    public function setReceiver_contact_name(?string $receiver_contact_name = null): self
    {
        // validation for constraint: string
        if (null !== $receiver_contact_name && !\is_string($receiver_contact_name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiver_contact_name, true), \gettype($receiver_contact_name)), __LINE__);
        }
        $this->receiver_contact_name = $receiver_contact_name;

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

    /**
     * Get labelType value
     */
    public function getLabelType(): ?LabelType
    {
        return $this->labelType;
    }

    /**
     * Set labelType value
     */
    public function setLabelType(?LabelType $labelType = null): self
    {
        $this->labelType = $labelType;

        return $this;
    }
}
