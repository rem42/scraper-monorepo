<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastNumber StructType
 */
#[\AllowDynamicProperties]
class GetLastNumber extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetLastNumberRequest $request = null;

    /**
     * Constructor method for GetLastNumber
     *
     * @uses GetLastNumber::setRequest()
     */
    public function __construct(?GetLastNumberRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?GetLastNumberRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?GetLastNumberRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
