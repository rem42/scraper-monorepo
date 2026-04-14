<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelServiceNotice StructType
 */
#[\AllowDynamicProperties]
class CancelServiceNotice extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?CancelServiceNoticeRequest $request = null;

    /**
     * Constructor method for CancelServiceNotice
     *
     * @uses CancelServiceNotice::setRequest()
     */
    public function __construct(?CancelServiceNoticeRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?CancelServiceNoticeRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?CancelServiceNoticeRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
