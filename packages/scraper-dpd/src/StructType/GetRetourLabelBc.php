<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRetourLabelBc StructType
 */
#[\AllowDynamicProperties]
class GetRetourLabelBc extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ReceiveRetourLabelBcRequest $request = null;

    /**
     * Constructor method for GetRetourLabelBc
     *
     * @uses GetRetourLabelBc::setRequest()
     */
    public function __construct(?ReceiveRetourLabelBcRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?ReceiveRetourLabelBcRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?ReceiveRetourLabelBcRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
