<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetServiceNoticeAnswers StructType
 */
#[\AllowDynamicProperties]
class GetServiceNoticeAnswers extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ServiceNoticeAnswersRequest $request = null;

    /**
     * Constructor method for GetServiceNoticeAnswers
     *
     * @uses GetServiceNoticeAnswers::setRequest()
     */
    public function __construct(?ServiceNoticeAnswersRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?ServiceNoticeAnswersRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?ServiceNoticeAnswersRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
