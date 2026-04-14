<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSafePlaceData StructType
 */
#[\AllowDynamicProperties]
class GetSafePlaceData extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetSafePlaceDataRequest $request = null;

    /**
     * Constructor method for GetSafePlaceData
     *
     * @uses GetSafePlaceData::setRequest()
     */
    public function __construct(?GetSafePlaceDataRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?GetSafePlaceDataRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?GetSafePlaceDataRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
