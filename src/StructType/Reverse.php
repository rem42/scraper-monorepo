<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for Reverse StructType
 */
#[\AllowDynamicProperties]
class Reverse extends DefaultService
{
    /**
     * The expireOffset
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $expireOffset;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $type;
    /**
     * The retour_receiver
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Address $retour_receiver = null;

    /**
     * Constructor method for Reverse
     *
     * @uses Reverse::setExpireOffset()
     * @uses Reverse::setType()
     * @uses Reverse::setRetour_receiver()
     */
    public function __construct(int $expireOffset, string $type, ?Address $retour_receiver = null)
    {
        $this
            ->setExpireOffset($expireOffset)
            ->setType($type)
            ->setRetour_receiver($retour_receiver)
        ;
    }

    /**
     * Get expireOffset value
     */
    public function getExpireOffset(): int
    {
        return $this->expireOffset;
    }

    /**
     * Set expireOffset value
     */
    public function setExpireOffset(int $expireOffset): self
    {
        // validation for constraint: int
        if (null !== $expireOffset && !(\is_int($expireOffset) || ctype_digit($expireOffset))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($expireOffset, true), \gettype($expireOffset)), __LINE__);
        }
        $this->expireOffset = $expireOffset;

        return $this;
    }

    /**
     * Get type value
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set type value
     *
     * @uses \Scraper\ScraperDPD\EnumType\EtypeReverse::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\EtypeReverse::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\EtypeReverse::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\EtypeReverse', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\EtypeReverse::getValidValues())), __LINE__);
        }
        $this->type = $type;

        return $this;
    }

    /**
     * Get retour_receiver value
     */
    public function getRetour_receiver(): ?Address
    {
        return $this->retour_receiver;
    }

    /**
     * Set retour_receiver value
     */
    public function setRetour_receiver(?Address $retour_receiver = null): self
    {
        $this->retour_receiver = $retour_receiver;

        return $this;
    }
}
