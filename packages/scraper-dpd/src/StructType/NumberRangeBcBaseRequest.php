<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for NumberRangeBcBaseRequest StructType
 */
#[\AllowDynamicProperties]
class NumberRangeBcBaseRequest extends NumberRangeBaseRequest
{
    /**
     * The BarcodecSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $BarcodecSource;
    /**
     * The Domain
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Domain = null;

    /**
     * Constructor method for NumberRangeBcBaseRequest
     *
     * @uses NumberRangeBcBaseRequest::setBarcodecSource()
     * @uses NumberRangeBcBaseRequest::setDomain()
     */
    public function __construct(int $barcodecSource, ?string $domain = null)
    {
        $this
            ->setBarcodecSource($barcodecSource)
            ->setDomain($domain)
        ;
    }

    /**
     * Get BarcodecSource value
     */
    public function getBarcodecSource(): int
    {
        return $this->BarcodecSource;
    }

    /**
     * Set BarcodecSource value
     */
    public function setBarcodecSource(int $barcodecSource): self
    {
        // validation for constraint: int
        if (null !== $barcodecSource && !(\is_int($barcodecSource) || ctype_digit($barcodecSource))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($barcodecSource, true), \gettype($barcodecSource)), __LINE__);
        }
        $this->BarcodecSource = $barcodecSource;

        return $this;
    }

    /**
     * Get Domain value
     */
    public function getDomain(): ?string
    {
        return $this->Domain;
    }

    /**
     * Set Domain value
     */
    public function setDomain(?string $domain = null): self
    {
        // validation for constraint: string
        if (null !== $domain && !\is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($domain, true), \gettype($domain)), __LINE__);
        }
        $this->Domain = $domain;

        return $this;
    }
}
