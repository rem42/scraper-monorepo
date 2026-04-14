<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for TerminateShipmentRequest StructType
 */
#[\AllowDynamicProperties]
class TerminateShipmentRequest extends ShipmentRequestBcBase
{
    /**
     * The Reason
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Reason = null;

    /**
     * Constructor method for TerminateShipmentRequest
     *
     * @uses TerminateShipmentRequest::setReason()
     */
    public function __construct(?string $reason = null)
    {
        $this
            ->setReason($reason)
        ;
    }

    /**
     * Get Reason value
     */
    public function getReason(): ?string
    {
        return $this->Reason;
    }

    /**
     * Set Reason value
     */
    public function setReason(?string $reason = null): self
    {
        // validation for constraint: string
        if (null !== $reason && !\is_string($reason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), \gettype($reason)), __LINE__);
        }
        $this->Reason = $reason;

        return $this;
    }
}
