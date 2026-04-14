<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RdvEsnInfo StructType
 */
#[\AllowDynamicProperties]
class RdvEsnInfo extends AbstractStructBase
{
    /**
     * The CreateEsn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $CreateEsn;
    /**
     * The EsnDirective
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $EsnDirective = null;

    /**
     * Constructor method for RdvEsnInfo
     *
     * @uses RdvEsnInfo::setCreateEsn()
     * @uses RdvEsnInfo::setEsnDirective()
     */
    public function __construct(bool $createEsn, ?string $esnDirective = null)
    {
        $this
            ->setCreateEsn($createEsn)
            ->setEsnDirective($esnDirective)
        ;
    }

    /**
     * Get CreateEsn value
     */
    public function getCreateEsn(): bool
    {
        return $this->CreateEsn;
    }

    /**
     * Set CreateEsn value
     */
    public function setCreateEsn(bool $createEsn): self
    {
        // validation for constraint: boolean
        if (null !== $createEsn && !\is_bool($createEsn)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($createEsn, true), \gettype($createEsn)), __LINE__);
        }
        $this->CreateEsn = $createEsn;

        return $this;
    }

    /**
     * Get EsnDirective value
     */
    public function getEsnDirective(): ?string
    {
        return $this->EsnDirective;
    }

    /**
     * Set EsnDirective value
     */
    public function setEsnDirective(?string $esnDirective = null): self
    {
        // validation for constraint: string
        if (null !== $esnDirective && !\is_string($esnDirective)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($esnDirective, true), \gettype($esnDirective)), __LINE__);
        }
        $this->EsnDirective = $esnDirective;

        return $this;
    }
}
