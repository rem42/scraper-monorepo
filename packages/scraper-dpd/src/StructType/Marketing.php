<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for Marketing StructType
 */
#[\AllowDynamicProperties]
class Marketing extends NonService
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $name = null;

    /**
     * Constructor method for Marketing
     *
     * @uses Marketing::setName()
     */
    public function __construct(?string $name = null)
    {
        $this
            ->setName($name)
        ;
    }

    /**
     * Get name value
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set name value
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (null !== $name && !\is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), \gettype($name)), __LINE__);
        }
        $this->name = $name;

        return $this;
    }
}
