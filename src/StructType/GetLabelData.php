<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLabelData StructType
 */
#[\AllowDynamicProperties]
class GetLabelData extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetLabelDataRequest $request = null;

    /**
     * Constructor method for GetLabelData
     *
     * @uses GetLabelData::setRequest()
     */
    public function __construct(?GetLabelDataRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?GetLabelDataRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?GetLabelDataRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
