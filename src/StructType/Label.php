<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Label StructType
 */
#[\AllowDynamicProperties]
class Label extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $type;
    /**
     * The label
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $label = null;

    /**
     * Constructor method for Label
     *
     * @uses Label::setType()
     * @uses Label::setLabel()
     */
    public function __construct(string $type, ?string $label = null)
    {
        $this
            ->setType($type)
            ->setLabel($label)
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
     * @uses \Scraper\ScraperDPD\EnumType\Etype::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\Etype::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\Etype::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\Etype', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\Etype::getValidValues())), __LINE__);
        }
        $this->type = $type;

        return $this;
    }

    /**
     * Get label value
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * Set label value
     */
    public function setLabel(?string $label = null): self
    {
        // validation for constraint: string
        if (null !== $label && !\is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), \gettype($label)), __LINE__);
        }
        $this->label = $label;

        return $this;
    }
}
