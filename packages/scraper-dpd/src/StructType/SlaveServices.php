<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for SlaveServices StructType
 */
#[\AllowDynamicProperties]
class SlaveServices extends SlaveServicesBase
{
    /**
     * The marketing
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Marketing $marketing = null;

    /**
     * Constructor method for SlaveServices
     *
     * @uses SlaveServices::setMarketing()
     */
    public function __construct(?Marketing $marketing = null)
    {
        $this
            ->setMarketing($marketing)
        ;
    }

    /**
     * Get marketing value
     */
    public function getMarketing(): ?Marketing
    {
        return $this->marketing;
    }

    /**
     * Set marketing value
     */
    public function setMarketing(?Marketing $marketing = null): self
    {
        $this->marketing = $marketing;

        return $this;
    }
}
