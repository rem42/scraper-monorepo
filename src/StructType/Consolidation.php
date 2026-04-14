<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for Consolidation StructType
 */
#[\AllowDynamicProperties]
class Consolidation extends DefaultService
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $type;

    /**
     * Constructor method for Consolidation
     *
     * @uses Consolidation::setType()
     */
    public function __construct(string $type)
    {
        $this
            ->setType($type)
        ;
    }

    /**
     * Get type value
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set type value
     *
     * @uses \Scraper\ScraperDPD\EnumType\EtypeConsolidation::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\EtypeConsolidation::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\EtypeConsolidation::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\EtypeConsolidation', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\EtypeConsolidation::getValidValues())), __LINE__);
        }
        $this->type = $type;

        return $this;
    }
}
