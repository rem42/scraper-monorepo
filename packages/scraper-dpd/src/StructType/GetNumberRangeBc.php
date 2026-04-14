<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNumberRangeBc StructType
 */
#[\AllowDynamicProperties]
class GetNumberRangeBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?NumberRangeBcRequest $request = null;

    /**
     * Constructor method for GetNumberRangeBc
     *
     * @uses GetNumberRangeBc::setRequest()
     */
    public function __construct(?NumberRangeBcRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?NumberRangeBcRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?NumberRangeBcRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
