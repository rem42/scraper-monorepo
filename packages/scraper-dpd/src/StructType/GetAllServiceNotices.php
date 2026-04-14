<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllServiceNotices StructType
 */
#[\AllowDynamicProperties]
class GetAllServiceNotices extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetAllServiceNoticesRequest $request = null;

    /**
     * Constructor method for GetAllServiceNotices
     *
     * @uses GetAllServiceNotices::setRequest()
     */
    public function __construct(?GetAllServiceNoticesRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?GetAllServiceNoticesRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?GetAllServiceNoticesRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
