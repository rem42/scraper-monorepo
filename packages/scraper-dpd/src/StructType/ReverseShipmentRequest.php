<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ReverseShipmentRequest StructType
 */
#[\AllowDynamicProperties]
class ReverseShipmentRequest extends ShipmentRequestBase
{
    /**
     * The expire_offset
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $expire_offset;
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
     * The services
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ReverseInverseServices $services = null;

    /**
     * Constructor method for ReverseShipmentRequest
     *
     * @uses ReverseShipmentRequest::setExpire_offset()
     * @uses ReverseShipmentRequest::setWeight()
     * @uses ReverseShipmentRequest::setReferencenumber()
     * @uses ReverseShipmentRequest::setServices()
     */
    public function __construct(int $expire_offset, ?string $weight = null, ?string $referencenumber = null, ?ReverseInverseServices $services = null)
    {
        $this
            ->setExpire_offset($expire_offset)
            ->setWeight($weight)
            ->setReferencenumber($referencenumber)
            ->setServices($services)
        ;
    }

    /**
     * Get expire_offset value
     */
    public function getExpire_offset(): int
    {
        return $this->expire_offset;
    }

    /**
     * Set expire_offset value
     */
    public function setExpire_offset(int $expire_offset): self
    {
        // validation for constraint: int
        if (null !== $expire_offset && !(\is_int($expire_offset) || ctype_digit($expire_offset))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expire_offset, true), \gettype($expire_offset)), __LINE__);
        }
        $this->expire_offset = $expire_offset;

        return $this;
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
     * Get services value
     */
    public function getServices(): ?ReverseInverseServices
    {
        return $this->services;
    }

    /**
     * Set services value
     */
    public function setServices(?ReverseInverseServices $services = null): self
    {
        $this->services = $services;

        return $this;
    }
}
