<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCollectionRequest StructType
 */
#[\AllowDynamicProperties]
class CreateCollectionRequest extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?CollectionRequestRequest $request = null;

    /**
     * Constructor method for CreateCollectionRequest
     *
     * @uses CreateCollectionRequest::setRequest()
     */
    public function __construct(?CollectionRequestRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?CollectionRequestRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?CollectionRequestRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
