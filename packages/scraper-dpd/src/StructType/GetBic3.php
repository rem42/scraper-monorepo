<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBic3 StructType
 */
#[\AllowDynamicProperties]
class GetBic3 extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetBic3Request $request = null;

    /**
     * Constructor method for GetBic3
     *
     * @uses GetBic3::setRequest()
     */
    public function __construct(?GetBic3Request $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?GetBic3Request
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?GetBic3Request $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
