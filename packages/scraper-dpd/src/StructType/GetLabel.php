<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabel StructType
 */
#[\AllowDynamicProperties]
class GetLabel extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ReceiveLabelRequest $request = null;

    /**
     * Constructor method for GetLabel
     *
     * @uses GetLabel::setRequest()
     */
    public function __construct(?ReceiveLabelRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?ReceiveLabelRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?ReceiveLabelRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
