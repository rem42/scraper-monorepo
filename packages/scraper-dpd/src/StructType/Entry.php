<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Entry StructType
 */
#[\AllowDynamicProperties]
class Entry extends AbstractStructBase
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
     * The NumberFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?int $NumberFrom;
    /**
     * The NumberTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?int $NumberTo;

    /**
     * Constructor method for Entry
     *
     * @uses Entry::setBarcodeSource()
     * @uses Entry::setDomain()
     * @uses Entry::setNumberFrom()
     * @uses Entry::setNumberTo()
     */
    public function __construct(int $barcodeSource, ?string $domain = null, ?int $numberFrom, ?int $numberTo)
    {
        $this
            ->setBarcodeSource($barcodeSource)
            ->setDomain($domain)
            ->setNumberFrom($numberFrom)
            ->setNumberTo($numberTo)
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

    /**
     * Get NumberFrom value
     */
    public function getNumberFrom(): int
    {
        return $this->NumberFrom;
    }

    /**
     * Set NumberFrom value
     */
    public function setNumberFrom(?int $numberFrom): self
    {
        // validation for constraint: int
        if (null !== $numberFrom && !(\is_int($numberFrom) || ctype_digit($numberFrom))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberFrom, true), \gettype($numberFrom)), __LINE__);
        }
        $this->NumberFrom = $numberFrom;

        return $this;
    }

    /**
     * Get NumberTo value
     */
    public function getNumberTo(): int
    {
        return $this->NumberTo;
    }

    /**
     * Set NumberTo value
     */
    public function setNumberTo(?int $numberTo): self
    {
        // validation for constraint: int
        if (null !== $numberTo && !(\is_int($numberTo) || ctype_digit($numberTo))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberTo, true), \gettype($numberTo)), __LINE__);
        }
        $this->NumberTo = $numberTo;

        return $this;
    }
}
