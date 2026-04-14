<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBic3Routing StructType
 */
#[\AllowDynamicProperties]
class GetBic3Routing extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetBic3RoutingRequest $request = null;

    /**
     * Constructor method for GetBic3Routing
     *
     * @uses GetBic3Routing::setRequest()
     */
    public function __construct(?GetBic3RoutingRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?GetBic3RoutingRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?GetBic3RoutingRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
