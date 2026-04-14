<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateServiceNotice StructType
 */
#[\AllowDynamicProperties]
class UpdateServiceNotice extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?UpdateServiceNoticeRequest $request = null;

    /**
     * Constructor method for UpdateServiceNotice
     *
     * @uses UpdateServiceNotice::setRequest()
     */
    public function __construct(?UpdateServiceNoticeRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?UpdateServiceNoticeRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?UpdateServiceNoticeRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
