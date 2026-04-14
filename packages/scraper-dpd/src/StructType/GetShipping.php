<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetShipping StructType
 */
#[\AllowDynamicProperties]
class GetShipping extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetShippingRequest $request = null;

    /**
     * Constructor method for GetShipping
     *
     * @uses GetShipping::setRequest()
     */
    public function __construct(?GetShippingRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?GetShippingRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?GetShippingRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
