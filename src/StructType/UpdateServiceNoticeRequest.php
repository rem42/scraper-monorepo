<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for UpdateServiceNoticeRequest StructType
 */
#[\AllowDynamicProperties]
class UpdateServiceNoticeRequest extends UpdateServiceNoticeRequestBase
{
    /**
     * The answerID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $answerID;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $text = null;
    /**
     * The address
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Address $address = null;

    /**
     * Constructor method for UpdateServiceNoticeRequest
     *
     * @uses UpdateServiceNoticeRequest::setAnswerID()
     * @uses UpdateServiceNoticeRequest::setText()
     * @uses UpdateServiceNoticeRequest::setAddress()
     */
    public function __construct(int $answerID, ?string $text = null, ?Address $address = null)
    {
        $this
            ->setAnswerID($answerID)
            ->setText($text)
            ->setAddress($address)
        ;
    }

    /**
     * Get answerID value
     */
    public function getAnswerID(): int
    {
        return $this->answerID;
    }

    /**
     * Set answerID value
     */
    public function setAnswerID(int $answerID): self
    {
        // validation for constraint: int
        if (null !== $answerID && !(\is_int($answerID) || ctype_digit($answerID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($answerID, true), \gettype($answerID)), __LINE__);
        }
        $this->answerID = $answerID;

        return $this;
    }

    /**
     * Get text value
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Set text value
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (null !== $text && !\is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), \gettype($text)), __LINE__);
        }
        $this->text = $text;

        return $this;
    }

    /**
     * Get address value
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * Set address value
     */
    public function setAddress(?Address $address = null): self
    {
        $this->address = $address;

        return $this;
    }
}
