<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendCNOTData StructType
 */
#[\AllowDynamicProperties]
class SendCNOTData extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?CNOTData $request = null;

    /**
     * Constructor method for SendCNOTData
     *
     * @uses SendCNOTData::setRequest()
     */
    public function __construct(?CNOTData $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?CNOTData
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?CNOTData $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
