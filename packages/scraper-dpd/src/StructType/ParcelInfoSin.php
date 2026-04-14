<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ParcelInfoSin StructType
 */
#[\AllowDynamicProperties]
class ParcelInfoSin extends ParcelInfo
{
    /**
     * The Sin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Sin = null;

    /**
     * Constructor method for ParcelInfoSin
     *
     * @uses ParcelInfoSin::setSin()
     */
    public function __construct(?string $sin = null)
    {
        $this
            ->setSin($sin)
        ;
    }

    /**
     * Get Sin value
     */
    public function getSin(): ?string
    {
        return $this->Sin;
    }

    /**
     * Set Sin value
     */
    public function setSin(?string $sin = null): self
    {
        // validation for constraint: string
        if (null !== $sin && !\is_string($sin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sin, true), \gettype($sin)), __LINE__);
        }
        $this->Sin = $sin;

        return $this;
    }
}
