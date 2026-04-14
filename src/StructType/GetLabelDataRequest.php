<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for GetLabelDataRequest StructType
 */
#[\AllowDynamicProperties]
class GetLabelDataRequest extends ShipmentRequestBcBase
{
    /**
     * The Options
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $Options;

    /**
     * Constructor method for GetLabelDataRequest
     *
     * @uses GetLabelDataRequest::setOptions()
     */
    public function __construct(string $options)
    {
        $this
            ->setOptions($options)
        ;
    }

    /**
     * Get Options value
     */
    public function getOptions(): string
    {
        return $this->Options;
    }

    /**
     * Set Options value
     *
     * @uses \Scraper\ScraperDPD\EnumType\ELabelDataOptions::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\ELabelDataOptions::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setOptions(string $options): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\ELabelDataOptions::valueIsValid($options)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\ELabelDataOptions', \is_array($options) ? implode(', ', $options) : var_export($options, true), implode(', ', \Scraper\ScraperDPD\EnumType\ELabelDataOptions::getValidValues())), __LINE__);
        }
        $this->Options = $options;

        return $this;
    }
}
