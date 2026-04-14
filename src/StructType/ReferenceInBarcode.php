<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceInBarcode StructType
 */
#[\AllowDynamicProperties]
class ReferenceInBarcode extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $type;

    /**
     * Constructor method for ReferenceInBarcode
     *
     * @uses ReferenceInBarcode::setType()
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
     * @uses \Scraper\ScraperDPD\EnumType\EReferenceType::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\EReferenceType::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\EReferenceType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\EReferenceType', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\EReferenceType::getValidValues())), __LINE__);
        }
        $this->type = $type;

        return $this;
    }
}
