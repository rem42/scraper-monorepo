<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceNoticeResponse StructType
 */
#[\AllowDynamicProperties]
class ServiceNoticeResponse extends AbstractStructBase
{
    /**
     * The servicenotices
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfServiceNotice $servicenotices = null;

    /**
     * Constructor method for ServiceNoticeResponse
     *
     * @uses ServiceNoticeResponse::setServicenotices()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfServiceNotice $servicenotices = null)
    {
        $this
            ->setServicenotices($servicenotices)
        ;
    }

    /**
     * Get servicenotices value
     */
    public function getServicenotices(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfServiceNotice
    {
        return $this->servicenotices;
    }

    /**
     * Set servicenotices value
     */
    public function setServicenotices(?\Scraper\ScraperDPD\ArrayType\ArrayOfServiceNotice $servicenotices = null): self
    {
        $this->servicenotices = $servicenotices;

        return $this;
    }
}
