<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateShipmentWithLabels StructType
 */
#[\AllowDynamicProperties]
class CreateShipmentWithLabels extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?StdShipmentLabelRequest $request = null;

    /**
     * Constructor method for CreateShipmentWithLabels
     *
     * @uses CreateShipmentWithLabels::setRequest()
     */
    public function __construct(?StdShipmentLabelRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?StdShipmentLabelRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?StdShipmentLabelRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
