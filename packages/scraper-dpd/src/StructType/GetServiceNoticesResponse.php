<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServiceNoticesResponse StructType
 */
#[\AllowDynamicProperties]
class GetServiceNoticesResponse extends AbstractStructBase
{
    /**
     * The GetServiceNoticesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ServiceNoticeResponse $GetServiceNoticesResult = null;

    /**
     * Constructor method for GetServiceNoticesResponse
     *
     * @uses GetServiceNoticesResponse::setGetServiceNoticesResult()
     */
    public function __construct(?ServiceNoticeResponse $getServiceNoticesResult = null)
    {
        $this
            ->setGetServiceNoticesResult($getServiceNoticesResult)
        ;
    }

    /**
     * Get GetServiceNoticesResult value
     */
    public function getGetServiceNoticesResult(): ?ServiceNoticeResponse
    {
        return $this->GetServiceNoticesResult;
    }

    /**
     * Set GetServiceNoticesResult value
     */
    public function setGetServiceNoticesResult(?ServiceNoticeResponse $getServiceNoticesResult = null): self
    {
        $this->GetServiceNoticesResult = $getServiceNoticesResult;

        return $this;
    }
}
