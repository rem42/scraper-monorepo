<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumberRangeBaseResponse StructType
 */
#[\AllowDynamicProperties]
abstract class NumberRangeBaseResponse extends AbstractStructBase
{
    /**
     * The NumberRangeFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $NumberRangeFrom;
    /**
     * The NumberRangeTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $NumberRangeTo;
    /**
     * The NumberRangeFree
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $NumberRangeFree;
    /**
     * The CustomerCenterNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $CustomerCenterNumber;
    /**
     * The CustomerNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $CustomerNumber;
    /**
     * The NumberRangeType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $NumberRangeType;
    /**
     * The NumberType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $NumberType;
    /**
     * The ClientId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ClientId = null;
    /**
     * The ValidUntil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ValidUntil = null;

    /**
     * Constructor method for NumberRangeBaseResponse
     *
     * @uses NumberRangeBaseResponse::setNumberRangeFrom()
     * @uses NumberRangeBaseResponse::setNumberRangeTo()
     * @uses NumberRangeBaseResponse::setNumberRangeFree()
     * @uses NumberRangeBaseResponse::setCustomerCenterNumber()
     * @uses NumberRangeBaseResponse::setCustomerNumber()
     * @uses NumberRangeBaseResponse::setNumberRangeType()
     * @uses NumberRangeBaseResponse::setNumberType()
     * @uses NumberRangeBaseResponse::setClientId()
     * @uses NumberRangeBaseResponse::setValidUntil()
     */
    public function __construct(int $numberRangeFrom, int $numberRangeTo, int $numberRangeFree, int $customerCenterNumber, int $customerNumber, int $numberRangeType, int $numberType, ?string $clientId = null, ?string $validUntil = null)
    {
        $this
            ->setNumberRangeFrom($numberRangeFrom)
            ->setNumberRangeTo($numberRangeTo)
            ->setNumberRangeFree($numberRangeFree)
            ->setCustomerCenterNumber($customerCenterNumber)
            ->setCustomerNumber($customerNumber)
            ->setNumberRangeType($numberRangeType)
            ->setNumberType($numberType)
            ->setClientId($clientId)
            ->setValidUntil($validUntil)
        ;
    }

    /**
     * Get NumberRangeFrom value
     */
    public function getNumberRangeFrom(): int
    {
        return $this->NumberRangeFrom;
    }

    /**
     * Set NumberRangeFrom value
     */
    public function setNumberRangeFrom(int $numberRangeFrom): self
    {
        // validation for constraint: int
        if (null !== $numberRangeFrom && !(\is_int($numberRangeFrom) || ctype_digit($numberRangeFrom))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberRangeFrom, true), \gettype($numberRangeFrom)), __LINE__);
        }
        $this->NumberRangeFrom = $numberRangeFrom;

        return $this;
    }

    /**
     * Get NumberRangeTo value
     */
    public function getNumberRangeTo(): int
    {
        return $this->NumberRangeTo;
    }

    /**
     * Set NumberRangeTo value
     */
    public function setNumberRangeTo(int $numberRangeTo): self
    {
        // validation for constraint: int
        if (null !== $numberRangeTo && !(\is_int($numberRangeTo) || ctype_digit($numberRangeTo))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberRangeTo, true), \gettype($numberRangeTo)), __LINE__);
        }
        $this->NumberRangeTo = $numberRangeTo;

        return $this;
    }

    /**
     * Get NumberRangeFree value
     */
    public function getNumberRangeFree(): int
    {
        return $this->NumberRangeFree;
    }

    /**
     * Set NumberRangeFree value
     */
    public function setNumberRangeFree(int $numberRangeFree): self
    {
        // validation for constraint: int
        if (null !== $numberRangeFree && !(\is_int($numberRangeFree) || ctype_digit($numberRangeFree))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberRangeFree, true), \gettype($numberRangeFree)), __LINE__);
        }
        $this->NumberRangeFree = $numberRangeFree;

        return $this;
    }

    /**
     * Get CustomerCenterNumber value
     */
    public function getCustomerCenterNumber(): int
    {
        return $this->CustomerCenterNumber;
    }

    /**
     * Set CustomerCenterNumber value
     */
    public function setCustomerCenterNumber(int $customerCenterNumber): self
    {
        // validation for constraint: int
        if (null !== $customerCenterNumber && !(\is_int($customerCenterNumber) || ctype_digit($customerCenterNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerCenterNumber, true), \gettype($customerCenterNumber)), __LINE__);
        }
        $this->CustomerCenterNumber = $customerCenterNumber;

        return $this;
    }

    /**
     * Get CustomerNumber value
     */
    public function getCustomerNumber(): int
    {
        return $this->CustomerNumber;
    }

    /**
     * Set CustomerNumber value
     */
    public function setCustomerNumber(int $customerNumber): self
    {
        // validation for constraint: int
        if (null !== $customerNumber && !(\is_int($customerNumber) || ctype_digit($customerNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerNumber, true), \gettype($customerNumber)), __LINE__);
        }
        $this->CustomerNumber = $customerNumber;

        return $this;
    }

    /**
     * Get NumberRangeType value
     */
    public function getNumberRangeType(): int
    {
        return $this->NumberRangeType;
    }

    /**
     * Set NumberRangeType value
     */
    public function setNumberRangeType(int $numberRangeType): self
    {
        // validation for constraint: int
        if (null !== $numberRangeType && !(\is_int($numberRangeType) || ctype_digit($numberRangeType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberRangeType, true), \gettype($numberRangeType)), __LINE__);
        }
        $this->NumberRangeType = $numberRangeType;

        return $this;
    }

    /**
     * Get NumberType value
     */
    public function getNumberType(): int
    {
        return $this->NumberType;
    }

    /**
     * Set NumberType value
     */
    public function setNumberType(int $numberType): self
    {
        // validation for constraint: int
        if (null !== $numberType && !(\is_int($numberType) || ctype_digit($numberType))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberType, true), \gettype($numberType)), __LINE__);
        }
        $this->NumberType = $numberType;

        return $this;
    }

    /**
     * Get ClientId value
     */
    public function getClientId(): ?string
    {
        return $this->ClientId;
    }

    /**
     * Set ClientId value
     */
    public function setClientId(?string $clientId = null): self
    {
        // validation for constraint: string
        if (null !== $clientId && !\is_string($clientId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientId, true), \gettype($clientId)), __LINE__);
        }
        $this->ClientId = $clientId;

        return $this;
    }

    /**
     * Get ValidUntil value
     */
    public function getValidUntil(): ?string
    {
        return $this->ValidUntil;
    }

    /**
     * Set ValidUntil value
     */
    public function setValidUntil(?string $validUntil = null): self
    {
        // validation for constraint: string
        if (null !== $validUntil && !\is_string($validUntil)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validUntil, true), \gettype($validUntil)), __LINE__);
        }
        $this->ValidUntil = $validUntil;

        return $this;
    }
}
