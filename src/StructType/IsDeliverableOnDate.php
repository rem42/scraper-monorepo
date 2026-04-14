<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsDeliverableOnDate StructType
 */
#[\AllowDynamicProperties]
class IsDeliverableOnDate extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?IsDeliverableRequest $request = null;

    /**
     * Constructor method for IsDeliverableOnDate
     *
     * @uses IsDeliverableOnDate::setRequest()
     */
    public function __construct(?IsDeliverableRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?IsDeliverableRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?IsDeliverableRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
