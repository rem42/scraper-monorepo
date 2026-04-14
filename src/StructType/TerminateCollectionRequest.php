<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for TerminateCollectionRequest StructType
 */
#[\AllowDynamicProperties]
class TerminateCollectionRequest extends TerminateCollectionRequestParcel
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?TerminateCollectionRequest $request = null;

    /**
     * Constructor method for TerminateCollectionRequest
     *
     * @uses TerminateCollectionRequest::setRequest()
     */
    public function __construct(?self $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?self
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?self $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
