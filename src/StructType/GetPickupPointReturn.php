<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickupPointReturn StructType
 */
#[\AllowDynamicProperties]
class GetPickupPointReturn extends AbstractStructBase
{
    /**
     * The WSResp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ResponseObject $WSResp = null;
    /**
     * The PckPoint
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?PickupPointObject $PckPoint = null;

    /**
     * Constructor method for GetPickupPointReturn
     *
     * @uses GetPickupPointReturn::setWSResp()
     * @uses GetPickupPointReturn::setPckPoint()
     */
    public function __construct(?ResponseObject $wSResp = null, ?PickupPointObject $pckPoint = null)
    {
        $this
            ->setWSResp($wSResp)
            ->setPckPoint($pckPoint)
        ;
    }

    /**
     * Get WSResp value
     */
    public function getWSResp(): ?ResponseObject
    {
        return $this->WSResp;
    }

    /**
     * Set WSResp value
     */
    public function setWSResp(?ResponseObject $wSResp = null): self
    {
        $this->WSResp = $wSResp;

        return $this;
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
}
