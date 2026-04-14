<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetShipmentResponse StructType
 */
#[\AllowDynamicProperties]
class SetShipmentResponse extends AbstractStructBase
{
    /**
     * The SetShipmentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?SetShipmentReturn $SetShipmentResult = null;

    /**
     * Constructor method for SetShipmentResponse
     *
     * @uses SetShipmentResponse::setSetShipmentResult()
     */
    public function __construct(?SetShipmentReturn $setShipmentResult = null)
    {
        $this
            ->setSetShipmentResult($setShipmentResult)
        ;
    }

    /**
     * Get SetShipmentResult value
     */
    public function getSetShipmentResult(): ?SetShipmentReturn
    {
        return $this->SetShipmentResult;
    }

    /**
     * Set SetShipmentResult value
     */
    public function setSetShipmentResult(?SetShipmentReturn $setShipmentResult = null): self
    {
        $this->SetShipmentResult = $setShipmentResult;

        return $this;
    }
}
