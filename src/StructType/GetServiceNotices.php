<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServiceNotices StructType
 */
#[\AllowDynamicProperties]
class GetServiceNotices extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ServiceNoticeRequest $request = null;

    /**
     * Constructor method for GetServiceNotices
     *
     * @uses GetServiceNotices::setRequest()
     */
    public function __construct(?ServiceNoticeRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?ServiceNoticeRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?ServiceNoticeRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
