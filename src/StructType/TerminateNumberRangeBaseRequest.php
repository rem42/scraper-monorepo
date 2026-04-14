<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TerminateNumberRangeBaseRequest StructType
 */
#[\AllowDynamicProperties]
abstract class TerminateNumberRangeBaseRequest extends AbstractStructBase
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
     * The ClientID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ClientID = null;

    /**
     * Constructor method for TerminateNumberRangeBaseRequest
     *
     * @uses TerminateNumberRangeBaseRequest::setNumberRangeFrom()
     * @uses TerminateNumberRangeBaseRequest::setNumberRangeTo()
     * @uses TerminateNumberRangeBaseRequest::setCustomerCenterNumber()
     * @uses TerminateNumberRangeBaseRequest::setCustomerNumber()
     * @uses TerminateNumberRangeBaseRequest::setClientID()
     */
    public function __construct(int $numberRangeFrom, int $numberRangeTo, int $customerCenterNumber, int $customerNumber, ?string $clientID = null)
    {
        $this
            ->setNumberRangeFrom($numberRangeFrom)
            ->setNumberRangeTo($numberRangeTo)
            ->setCustomerCenterNumber($customerCenterNumber)
            ->setCustomerNumber($customerNumber)
            ->setClientID($clientID)
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
     * Get ClientID value
     */
    public function getClientID(): ?string
    {
        return $this->ClientID;
    }

    /**
     * Set ClientID value
     */
    public function setClientID(?string $clientID = null): self
    {
        // validation for constraint: string
        if (null !== $clientID && !\is_string($clientID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($clientID, true), \gettype($clientID)), __LINE__);
        }
        $this->ClientID = $clientID;

        return $this;
    }
}
