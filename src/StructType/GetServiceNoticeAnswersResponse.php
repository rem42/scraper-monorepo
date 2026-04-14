<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServiceNoticeAnswersResponse StructType
 */
#[\AllowDynamicProperties]
class GetServiceNoticeAnswersResponse extends AbstractStructBase
{
    /**
     * The GetServiceNoticeAnswersResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ServiceNoticeAnswersResponse $GetServiceNoticeAnswersResult = null;

    /**
     * Constructor method for GetServiceNoticeAnswersResponse
     *
     * @uses GetServiceNoticeAnswersResponse::setGetServiceNoticeAnswersResult()
     */
    public function __construct(?ServiceNoticeAnswersResponse $getServiceNoticeAnswersResult = null)
    {
        $this
            ->setGetServiceNoticeAnswersResult($getServiceNoticeAnswersResult)
        ;
    }

    /**
     * Get GetServiceNoticeAnswersResult value
     */
    public function getGetServiceNoticeAnswersResult(): ?ServiceNoticeAnswersResponse
    {
        return $this->GetServiceNoticeAnswersResult;
    }

    /**
     * Set GetServiceNoticeAnswersResult value
     */
    public function setGetServiceNoticeAnswersResult(?ServiceNoticeAnswersResponse $getServiceNoticeAnswersResult = null): self
    {
        $this->GetServiceNoticeAnswersResult = $getServiceNoticeAnswersResult;

        return $this;
    }
}
