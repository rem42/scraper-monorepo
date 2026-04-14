<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RdvService StructType
 */
#[\AllowDynamicProperties]
class RdvService extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $Type;
    /**
     * The Attribute
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $Attribute;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $Status;

    /**
     * Constructor method for RdvService
     *
     * @uses RdvService::setType()
     * @uses RdvService::setAttribute()
     * @uses RdvService::setStatus()
     */
    public function __construct(int $type, int $attribute, int $status)
    {
        $this
            ->setType($type)
            ->setAttribute($attribute)
            ->setStatus($status)
        ;
    }

    /**
     * Get Type value
     */
    public function getType(): int
    {
        return $this->Type;
    }

    /**
     * Set Type value
     */
    public function setType(int $type): self
    {
        // validation for constraint: int
        if (null !== $type && !(\is_int($type) || ctype_digit($type))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), \gettype($type)), __LINE__);
        }
        $this->Type = $type;

        return $this;
    }

    /**
     * Get Attribute value
     */
    public function getAttribute(): int
    {
        return $this->Attribute;
    }

    /**
     * Set Attribute value
     */
    public function setAttribute(int $attribute): self
    {
        // validation for constraint: int
        if (null !== $attribute && !(\is_int($attribute) || ctype_digit($attribute))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attribute, true), \gettype($attribute)), __LINE__);
        }
        $this->Attribute = $attribute;

        return $this;
    }

    /**
     * Get Status value
     */
    public function getStatus(): int
    {
        return $this->Status;
    }

    /**
     * Set Status value
     */
    public function setStatus(int $status): self
    {
        // validation for constraint: int
        if (null !== $status && !(\is_int($status) || ctype_digit($status))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($status, true), \gettype($status)), __LINE__);
        }
        $this->Status = $status;

        return $this;
    }
}
