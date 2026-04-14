<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionValue StructType
 */
#[\AllowDynamicProperties]
class GetOptionValue extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetOptionRequest $request = null;

    /**
     * Constructor method for GetOptionValue
     *
     * @uses GetOptionValue::setRequest()
     */
    public function __construct(?GetOptionRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?GetOptionRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?GetOptionRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
