<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for RetourServices StructType
 */
#[\AllowDynamicProperties]
class RetourServices extends ServiceBaseList
{
    /**
     * The expireOffset
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $expireOffset;

    /**
     * Constructor method for RetourServices
     *
     * @uses RetourServices::setExpireOffset()
     */
    public function __construct(int $expireOffset)
    {
        $this
            ->setExpireOffset($expireOffset)
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
}
