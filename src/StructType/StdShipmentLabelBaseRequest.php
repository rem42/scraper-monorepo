<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for StdShipmentLabelBaseRequest StructType
 */
#[\AllowDynamicProperties]
class StdShipmentLabelBaseRequest extends StdShipmentRequest
{
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
     * Constructor method for StdShipmentLabelBaseRequest
     *
     * @uses StdShipmentLabelBaseRequest::setCustomLabelText()
     * @uses StdShipmentLabelBaseRequest::setLabelType()
     */
    public function __construct(?string $customLabelText = null, ?LabelType $labelType = null)
    {
        $this
            ->setCustomLabelText($customLabelText)
            ->setLabelType($labelType)
        ;
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
