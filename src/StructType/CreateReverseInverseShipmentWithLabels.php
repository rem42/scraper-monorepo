<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateReverseInverseShipmentWithLabels StructType
 */
#[\AllowDynamicProperties]
class CreateReverseInverseShipmentWithLabels extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ReverseShipmentLabelRequest $request = null;

    /**
     * Constructor method for CreateReverseInverseShipmentWithLabels
     *
     * @uses CreateReverseInverseShipmentWithLabels::setRequest()
     */
    public function __construct(?ReverseShipmentLabelRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?ReverseShipmentLabelRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?ReverseShipmentLabelRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
