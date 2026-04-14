<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetShipment StructType
 */
#[\AllowDynamicProperties]
class SetShipment extends AbstractStructBase
{
    /**
     * The SetShipmentRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?SetShipmentRequest $SetShipmentRequest;

    /**
     * Constructor method for SetShipment
     *
     * @uses SetShipment::setSetShipmentRequest()
     */
    public function __construct(?SetShipmentRequest $setShipmentRequest)
    {
        $this
            ->setSetShipmentRequest($setShipmentRequest)
        ;
    }

    /**
     * Get SetShipmentRequest value
     */
    public function getSetShipmentRequest(): SetShipmentRequest
    {
        return $this->SetShipmentRequest;
    }

    /**
     * Set SetShipmentRequest value
     */
    public function setSetShipmentRequest(?SetShipmentRequest $setShipmentRequest): self
    {
        $this->SetShipmentRequest = $setShipmentRequest;

        return $this;
    }
}
