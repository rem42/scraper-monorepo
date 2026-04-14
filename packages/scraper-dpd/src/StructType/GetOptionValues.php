<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionValues StructType
 */
#[\AllowDynamicProperties]
class GetOptionValues extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetOptionsRequest $request = null;

    /**
     * Constructor method for GetOptionValues
     *
     * @uses GetOptionValues::setRequest()
     */
    public function __construct(?GetOptionsRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?GetOptionsRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?GetOptionsRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
