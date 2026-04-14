<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPickupPointDelivery StructType
 */
#[\AllowDynamicProperties]
class SetPickupPointDelivery extends AbstractStructBase
{
    /**
     * The SetPickupPointDeliveryRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?SetPickupPointDeliveryRequest $SetPickupPointDeliveryRequest;

    /**
     * Constructor method for SetPickupPointDelivery
     *
     * @uses SetPickupPointDelivery::setSetPickupPointDeliveryRequest()
     */
    public function __construct(?SetPickupPointDeliveryRequest $setPickupPointDeliveryRequest)
    {
        $this
            ->setSetPickupPointDeliveryRequest($setPickupPointDeliveryRequest)
        ;
    }

    /**
     * Get SetPickupPointDeliveryRequest value
     */
    public function getSetPickupPointDeliveryRequest(): SetPickupPointDeliveryRequest
    {
        return $this->SetPickupPointDeliveryRequest;
    }

    /**
     * Set SetPickupPointDeliveryRequest value
     */
    public function setSetPickupPointDeliveryRequest(?SetPickupPointDeliveryRequest $setPickupPointDeliveryRequest): self
    {
        $this->SetPickupPointDeliveryRequest = $setPickupPointDeliveryRequest;

        return $this;
    }
}
