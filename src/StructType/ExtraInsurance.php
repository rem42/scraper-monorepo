<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ExtraInsurance StructType
 */
#[\AllowDynamicProperties]
class ExtraInsurance extends DefaultService
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $type;
    /**
     * The value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $value = null;

    /**
     * Constructor method for ExtraInsurance
     *
     * @uses ExtraInsurance::setType()
     * @uses ExtraInsurance::setValue()
     */
    public function __construct(string $type, ?string $value = null)
    {
        $this
            ->setType($type)
            ->setValue($value)
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
     * @uses \Scraper\ScraperDPD\EnumType\EtypeInsurance::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\EtypeInsurance::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\EtypeInsurance::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\EtypeInsurance', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\EtypeInsurance::getValidValues())), __LINE__);
        }
        $this->type = $type;

        return $this;
    }

    /**
     * Get value value
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Set value value
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (null !== $value && !\is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), \gettype($value)), __LINE__);
        }
        $this->value = $value;

        return $this;
    }
}
