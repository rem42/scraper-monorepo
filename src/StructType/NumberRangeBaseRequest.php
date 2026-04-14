<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NumberRangeBaseRequest StructType
 */
#[\AllowDynamicProperties]
abstract class NumberRangeBaseRequest extends AbstractStructBase
{
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
     * The NumberRangeType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $NumberRangeType = null;

    /**
     * Constructor method for NumberRangeBaseRequest
     *
     * @uses NumberRangeBaseRequest::setCustomerCenterNumber()
     * @uses NumberRangeBaseRequest::setCustomerNumber()
     * @uses NumberRangeBaseRequest::setClientID()
     * @uses NumberRangeBaseRequest::setNumberRangeType()
     */
    public function __construct(int $customerCenterNumber, int $customerNumber, ?string $clientID = null, ?string $numberRangeType = null)
    {
        $this
            ->setCustomerCenterNumber($customerCenterNumber)
            ->setCustomerNumber($customerNumber)
            ->setClientID($clientID)
            ->setNumberRangeType($numberRangeType)
        ;
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

    /**
     * Get NumberRangeType value
     */
    public function getNumberRangeType(): ?string
    {
        return $this->NumberRangeType;
    }

    /**
     * Set NumberRangeType value
     */
    public function setNumberRangeType(?string $numberRangeType = null): self
    {
        // validation for constraint: string
        if (null !== $numberRangeType && !\is_string($numberRangeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numberRangeType, true), \gettype($numberRangeType)), __LINE__);
        }
        $this->NumberRangeType = $numberRangeType;

        return $this;
    }
}
