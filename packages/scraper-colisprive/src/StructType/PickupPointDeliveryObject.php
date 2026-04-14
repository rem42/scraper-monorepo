<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupPointDeliveryObject StructType
 */
#[\AllowDynamicProperties]
class PickupPointDeliveryObject extends AbstractStructBase
{
    /**
     * The PckPoint
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?PickupPointObject $PckPoint = null;
    /**
     * The PlannedDlvrDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $PlannedDlvrDate = null;

    /**
     * Constructor method for PickupPointDeliveryObject
     *
     * @uses PickupPointDeliveryObject::setPckPoint()
     * @uses PickupPointDeliveryObject::setPlannedDlvrDate()
     */
    public function __construct(?PickupPointObject $pckPoint = null, ?string $plannedDlvrDate = null)
    {
        $this
            ->setPckPoint($pckPoint)
            ->setPlannedDlvrDate($plannedDlvrDate)
        ;
    }

    /**
     * Get PckPoint value
     */
    public function getPckPoint(): ?PickupPointObject
    {
        return $this->PckPoint;
    }

    /**
     * Set PckPoint value
     */
    public function setPckPoint(?PickupPointObject $pckPoint = null): self
    {
        $this->PckPoint = $pckPoint;

        return $this;
    }

    /**
     * Get PlannedDlvrDate value
     */
    public function getPlannedDlvrDate(): ?string
    {
        return $this->PlannedDlvrDate;
    }

    /**
     * Set PlannedDlvrDate value
     */
    public function setPlannedDlvrDate(?string $plannedDlvrDate = null): self
    {
        // validation for constraint: string
        if (null !== $plannedDlvrDate && !\is_string($plannedDlvrDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plannedDlvrDate, true), \gettype($plannedDlvrDate)), __LINE__);
        }
        $this->PlannedDlvrDate = $plannedDlvrDate;

        return $this;
    }
}
