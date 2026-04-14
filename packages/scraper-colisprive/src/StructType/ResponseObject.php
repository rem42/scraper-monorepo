<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseObject StructType
 */
#[\AllowDynamicProperties]
class ResponseObject extends AbstractStructBase
{
    /**
     * The RtnCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $RtnCode;
    /**
     * The RtnMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $RtnMessage = null;

    /**
     * Constructor method for ResponseObject
     *
     * @uses ResponseObject::setRtnCode()
     * @uses ResponseObject::setRtnMessage()
     */
    public function __construct(int $rtnCode, ?string $rtnMessage = null)
    {
        $this
            ->setRtnCode($rtnCode)
            ->setRtnMessage($rtnMessage)
        ;
    }

    /**
     * Get RtnCode value
     */
    public function getRtnCode(): int
    {
        return $this->RtnCode;
    }

    /**
     * Set RtnCode value
     */
    public function setRtnCode(int $rtnCode): self
    {
        // validation for constraint: int
        if (null !== $rtnCode && !(\is_int($rtnCode) || ctype_digit($rtnCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rtnCode, true), \gettype($rtnCode)), __LINE__);
        }
        $this->RtnCode = $rtnCode;

        return $this;
    }

    /**
     * Get RtnMessage value
     */
    public function getRtnMessage(): ?string
    {
        return $this->RtnMessage;
    }

    /**
     * Set RtnMessage value
     */
    public function setRtnMessage(?string $rtnMessage = null): self
    {
        // validation for constraint: string
        if (null !== $rtnMessage && !\is_string($rtnMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rtnMessage, true), \gettype($rtnMessage)), __LINE__);
        }
        $this->RtnMessage = $rtnMessage;

        return $this;
    }
}
