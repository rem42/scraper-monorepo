<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSecureData StructType
 */
#[\AllowDynamicProperties]
class GetSecureData extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetSecureDataRequest $request = null;

    /**
     * Constructor method for GetSecureData
     *
     * @uses GetSecureData::setRequest()
     */
    public function __construct(?GetSecureDataRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?GetSecureDataRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?GetSecureDataRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
