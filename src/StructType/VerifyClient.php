<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyClient StructType
 */
#[\AllowDynamicProperties]
class VerifyClient extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?VerifyRequest $request = null;

    /**
     * Constructor method for VerifyClient
     *
     * @uses VerifyClient::setRequest()
     */
    public function __construct(?VerifyRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?VerifyRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?VerifyRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
