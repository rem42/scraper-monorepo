<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBic3Response StructType
 */
#[\AllowDynamicProperties]
class GetBic3Response extends AbstractStructBase
{
    /**
     * The GetBic3Result
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $GetBic3Result;

    /**
     * Constructor method for GetBic3Response
     *
     * @uses GetBic3Response::setGetBic3Result()
     */
    public function __construct(int $getBic3Result)
    {
        $this
            ->setGetBic3Result($getBic3Result)
        ;
    }

    /**
     * Get GetBic3Result value
     */
    public function getGetBic3Result(): int
    {
        return $this->GetBic3Result;
    }

    /**
     * Set GetBic3Result value
     */
    public function setGetBic3Result(int $getBic3Result): self
    {
        // validation for constraint: int
        if (null !== $getBic3Result && !(\is_int($getBic3Result) || ctype_digit($getBic3Result))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($getBic3Result, true), \gettype($getBic3Result)), __LINE__);
        }
        $this->GetBic3Result = $getBic3Result;

        return $this;
    }
}
