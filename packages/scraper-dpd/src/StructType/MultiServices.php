<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for MultiServices StructType
 */
#[\AllowDynamicProperties]
class MultiServices extends ContactServices
{
    /**
     * The consolidation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Consolidation $consolidation = null;
    /**
     * The pickupAtCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?PickupData $pickupAtCustomer = null;

    /**
     * Constructor method for MultiServices
     *
     * @uses MultiServices::setConsolidation()
     * @uses MultiServices::setPickupAtCustomer()
     */
    public function __construct(?Consolidation $consolidation = null, ?PickupData $pickupAtCustomer = null)
    {
        $this
            ->setConsolidation($consolidation)
            ->setPickupAtCustomer($pickupAtCustomer)
        ;
    }

    /**
     * Get consolidation value
     */
    public function getConsolidation(): ?Consolidation
    {
        return $this->consolidation;
    }

    /**
     * Set consolidation value
     */
    public function setConsolidation(?Consolidation $consolidation = null): self
    {
        $this->consolidation = $consolidation;

        return $this;
    }

    /**
     * Get pickupAtCustomer value
     */
    public function getPickupAtCustomer(): ?PickupData
    {
        return $this->pickupAtCustomer;
    }

    /**
     * Set pickupAtCustomer value
     */
    public function setPickupAtCustomer(?PickupData $pickupAtCustomer = null): self
    {
        $this->pickupAtCustomer = $pickupAtCustomer;

        return $this;
    }
}
