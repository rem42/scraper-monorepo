<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPickupPointDeliveryResponse StructType
 */
#[\AllowDynamicProperties]
class SetPickupPointDeliveryResponse extends AbstractStructBase
{
    /**
     * The SetPickupPointDeliveryResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?SetPickupPointDeliveryReturn $SetPickupPointDeliveryResult = null;

    /**
     * Constructor method for SetPickupPointDeliveryResponse
     *
     * @uses SetPickupPointDeliveryResponse::setSetPickupPointDeliveryResult()
     */
    public function __construct(?SetPickupPointDeliveryReturn $setPickupPointDeliveryResult = null)
    {
        $this
            ->setSetPickupPointDeliveryResult($setPickupPointDeliveryResult)
        ;
    }

    /**
     * Get SetPickupPointDeliveryResult value
     */
    public function getSetPickupPointDeliveryResult(): ?SetPickupPointDeliveryReturn
    {
        return $this->SetPickupPointDeliveryResult;
    }

    /**
     * Set SetPickupPointDeliveryResult value
     */
    public function setSetPickupPointDeliveryResult(?SetPickupPointDeliveryReturn $setPickupPointDeliveryResult = null): self
    {
        $this->SetPickupPointDeliveryResult = $setPickupPointDeliveryResult;

        return $this;
    }
}
