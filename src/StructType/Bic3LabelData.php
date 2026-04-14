<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Bic3LabelData StructType
 */
#[\AllowDynamicProperties]
class Bic3LabelData extends AbstractStructBase
{
    /**
     * The mode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $mode;

    /**
     * Constructor method for Bic3LabelData
     *
     * @uses Bic3LabelData::setMode()
     */
    public function __construct(string $mode)
    {
        $this
            ->setMode($mode)
        ;
    }

    /**
     * Get mode value
     */
    public function getMode(): string
    {
        return $this->mode;
    }

    /**
     * Set mode value
     *
     * @uses \Scraper\ScraperDPD\EnumType\EBic3Mode::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\EBic3Mode::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setMode(string $mode): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\EBic3Mode::valueIsValid($mode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\EBic3Mode', \is_array($mode) ? implode(', ', $mode) : var_export($mode, true), implode(', ', \Scraper\ScraperDPD\EnumType\EBic3Mode::getValidValues())), __LINE__);
        }
        $this->mode = $mode;

        return $this;
    }
}
