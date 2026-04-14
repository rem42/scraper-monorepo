<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelBc StructType
 */
#[\AllowDynamicProperties]
class GetLabelBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ReceiveLabelBcRequest $request = null;

    /**
     * Constructor method for GetLabelBc
     *
     * @uses GetLabelBc::setRequest()
     */
    public function __construct(?ReceiveLabelBcRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?ReceiveLabelBcRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?ReceiveLabelBcRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
