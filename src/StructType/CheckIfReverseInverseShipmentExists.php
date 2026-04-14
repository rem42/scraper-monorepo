<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckIfReverseInverseShipmentExists StructType
 */
#[\AllowDynamicProperties]
class CheckIfReverseInverseShipmentExists extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?CheckIfReverseInverseShipmentExistsRequest $request = null;

    /**
     * Constructor method for CheckIfReverseInverseShipmentExists
     *
     * @uses CheckIfReverseInverseShipmentExists::setRequest()
     */
    public function __construct(?CheckIfReverseInverseShipmentExistsRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?CheckIfReverseInverseShipmentExistsRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?CheckIfReverseInverseShipmentExistsRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
