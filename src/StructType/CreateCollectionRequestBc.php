<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCollectionRequestBc StructType
 */
#[\AllowDynamicProperties]
class CreateCollectionRequestBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?CollectionRequestRequest $request = null;

    /**
     * Constructor method for CreateCollectionRequestBc
     *
     * @uses CreateCollectionRequestBc::setRequest()
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
