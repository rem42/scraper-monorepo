<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProperties StructType
 */
#[\AllowDynamicProperties]
class GetProperties extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetPropertiesRequest $request = null;

    /**
     * Constructor method for GetProperties
     *
     * @uses GetProperties::setRequest()
     */
    public function __construct(?GetPropertiesRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?GetPropertiesRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?GetPropertiesRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
