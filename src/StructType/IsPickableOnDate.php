<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IsPickableOnDate StructType
 */
#[\AllowDynamicProperties]
class IsPickableOnDate extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?IsPickableRequest $request = null;

    /**
     * Constructor method for IsPickableOnDate
     *
     * @uses IsPickableOnDate::setRequest()
     */
    public function __construct(?IsPickableRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?IsPickableRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?IsPickableRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
