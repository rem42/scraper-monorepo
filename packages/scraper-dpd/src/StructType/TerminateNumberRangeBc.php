<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerminateNumberRangeBc StructType
 */
#[\AllowDynamicProperties]
class TerminateNumberRangeBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?TerminateNumberRangeBcRequest $request = null;

    /**
     * Constructor method for TerminateNumberRangeBc
     *
     * @uses TerminateNumberRangeBc::setRequest()
     */
    public function __construct(?TerminateNumberRangeBcRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?TerminateNumberRangeBcRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?TerminateNumberRangeBcRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
