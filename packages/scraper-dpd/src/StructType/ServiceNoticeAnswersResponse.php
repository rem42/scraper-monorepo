<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceNoticeAnswersResponse StructType
 */
#[\AllowDynamicProperties]
class ServiceNoticeAnswersResponse extends AbstractStructBase
{
    /**
     * The answers
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfText $answers = null;

    /**
     * Constructor method for ServiceNoticeAnswersResponse
     *
     * @uses ServiceNoticeAnswersResponse::setAnswers()
     */
    public function __construct(?\Scraper\ScraperDPD\ArrayType\ArrayOfText $answers = null)
    {
        $this
            ->setAnswers($answers)
        ;
    }

    /**
     * Get answers value
     */
    public function getAnswers(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfText
    {
        return $this->answers;
    }

    /**
     * Set answers value
     */
    public function setAnswers(?\Scraper\ScraperDPD\ArrayType\ArrayOfText $answers = null): self
    {
        $this->answers = $answers;

        return $this;
    }
}
