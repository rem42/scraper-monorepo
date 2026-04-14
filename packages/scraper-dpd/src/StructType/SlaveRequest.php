<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SlaveRequest StructType
 */
#[\AllowDynamicProperties]
class SlaveRequest extends AbstractStructBase
{
    /**
     * The weight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $weight = null;
    /**
     * The referencenumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $referencenumber = null;
    /**
     * The reference2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $reference2 = null;
    /**
     * The reference3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $reference3 = null;
    /**
     * The reference4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $reference4 = null;
    /**
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?SlaveServices $services = null;

    /**
     * Constructor method for SlaveRequest
     *
     * @uses SlaveRequest::setWeight()
     * @uses SlaveRequest::setReferencenumber()
     * @uses SlaveRequest::setReference2()
     * @uses SlaveRequest::setReference3()
     * @uses SlaveRequest::setReference4()
     * @uses SlaveRequest::setServices()
     */
    public function __construct(?string $weight = null, ?string $referencenumber = null, ?string $reference2 = null, ?string $reference3 = null, ?string $reference4 = null, ?SlaveServices $services = null)
    {
        $this
            ->setWeight($weight)
            ->setReferencenumber($referencenumber)
            ->setReference2($reference2)
            ->setReference3($reference3)
            ->setReference4($reference4)
            ->setServices($services)
        ;
    }

    /**
     * Get weight value
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }

    /**
     * Set weight value
     */
    public function setWeight(?string $weight = null): self
    {
        // validation for constraint: string
        if (null !== $weight && !\is_string($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($weight, true), \gettype($weight)), __LINE__);
        }
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get referencenumber value
     */
    public function getReferencenumber(): ?string
    {
        return $this->referencenumber;
    }

    /**
     * Set referencenumber value
     */
    public function setReferencenumber(?string $referencenumber = null): self
    {
        // validation for constraint: string
        if (null !== $referencenumber && !\is_string($referencenumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referencenumber, true), \gettype($referencenumber)), __LINE__);
        }
        $this->referencenumber = $referencenumber;

        return $this;
    }

    /**
     * Get reference2 value
     */
    public function getReference2(): ?string
    {
        return $this->reference2;
    }

    /**
     * Set reference2 value
     */
    public function setReference2(?string $reference2 = null): self
    {
        // validation for constraint: string
        if (null !== $reference2 && !\is_string($reference2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference2, true), \gettype($reference2)), __LINE__);
        }
        $this->reference2 = $reference2;

        return $this;
    }

    /**
     * Get reference3 value
     */
    public function getReference3(): ?string
    {
        return $this->reference3;
    }

    /**
     * Set reference3 value
     */
    public function setReference3(?string $reference3 = null): self
    {
        // validation for constraint: string
        if (null !== $reference3 && !\is_string($reference3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference3, true), \gettype($reference3)), __LINE__);
        }
        $this->reference3 = $reference3;

        return $this;
    }

    /**
     * Get reference4 value
     */
    public function getReference4(): ?string
    {
        return $this->reference4;
    }

    /**
     * Set reference4 value
     */
    public function setReference4(?string $reference4 = null): self
    {
        // validation for constraint: string
        if (null !== $reference4 && !\is_string($reference4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference4, true), \gettype($reference4)), __LINE__);
        }
        $this->reference4 = $reference4;

        return $this;
    }

    /**
     * Get services value
     */
    public function getServices(): ?SlaveServices
    {
        return $this->services;
    }

    /**
     * Set services value
     */
    public function setServices(?SlaveServices $services = null): self
    {
        $this->services = $services;

        return $this;
    }
}
