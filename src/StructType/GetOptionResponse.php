<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOptionResponse StructType
 */
#[\AllowDynamicProperties]
class GetOptionResponse extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Value = null;
    /**
     * The Parameter
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Parameter = null;

    /**
     * Constructor method for GetOptionResponse
     *
     * @uses GetOptionResponse::setValue()
     * @uses GetOptionResponse::setParameter()
     */
    public function __construct(?string $value = null, ?string $parameter = null)
    {
        $this
            ->setValue($value)
            ->setParameter($parameter)
        ;
    }

    /**
     * Get Value value
     */
    public function getValue(): ?string
    {
        return $this->Value;
    }

    /**
     * Set Value value
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (null !== $value && !\is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), \gettype($value)), __LINE__);
        }
        $this->Value = $value;

        return $this;
    }

    /**
     * Get Parameter value
     */
    public function getParameter(): ?string
    {
        return $this->Parameter;
    }

    /**
     * Set Parameter value
     */
    public function setParameter(?string $parameter = null): self
    {
        // validation for constraint: string
        if (null !== $parameter && !\is_string($parameter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parameter, true), \gettype($parameter)), __LINE__);
        }
        $this->Parameter = $parameter;

        return $this;
    }
}
