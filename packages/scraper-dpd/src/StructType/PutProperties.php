<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PutProperties StructType
 */
#[\AllowDynamicProperties]
class PutProperties extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?PutPropertiesRequest $request = null;

    /**
     * Constructor method for PutProperties
     *
     * @uses PutProperties::setRequest()
     */
    public function __construct(?PutPropertiesRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?PutPropertiesRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?PutPropertiesRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
