<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for NumberRangeBcResponse StructType
 */
#[\AllowDynamicProperties]
class NumberRangeBcResponse extends NumberRangeBaseResponse
{
    /**
     * The BarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $BarcodeSource;
    /**
     * The Domain
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Domain = null;

    /**
     * Constructor method for NumberRangeBcResponse
     *
     * @uses NumberRangeBcResponse::setBarcodeSource()
     * @uses NumberRangeBcResponse::setDomain()
     */
    public function __construct(int $barcodeSource, ?string $domain = null)
    {
        $this
            ->setBarcodeSource($barcodeSource)
            ->setDomain($domain)
        ;
    }

    /**
     * Get BarcodeSource value
     */
    public function getBarcodeSource(): int
    {
        return $this->BarcodeSource;
    }

    /**
     * Set BarcodeSource value
     */
    public function setBarcodeSource(int $barcodeSource): self
    {
        // validation for constraint: int
        if (null !== $barcodeSource && !(\is_int($barcodeSource) || ctype_digit($barcodeSource))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($barcodeSource, true), \gettype($barcodeSource)), __LINE__);
        }
        $this->BarcodeSource = $barcodeSource;

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
