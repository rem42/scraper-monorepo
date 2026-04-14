<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourLabel StructType
 */
#[\AllowDynamicProperties]
class GetRetourLabel extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ReceiveRetourLabelRequest $request = null;

    /**
     * Constructor method for GetRetourLabel
     *
     * @uses GetRetourLabel::setRequest()
     */
    public function __construct(?ReceiveRetourLabelRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?ReceiveRetourLabelRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?ReceiveRetourLabelRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
