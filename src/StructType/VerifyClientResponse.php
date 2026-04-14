<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyClientResponse StructType
 */
#[\AllowDynamicProperties]
class VerifyClientResponse extends AbstractStructBase
{
    /**
     * The VerifyClientResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?VerifyResponse $VerifyClientResult = null;

    /**
     * Constructor method for VerifyClientResponse
     *
     * @uses VerifyClientResponse::setVerifyClientResult()
     */
    public function __construct(?VerifyResponse $verifyClientResult = null)
    {
        $this
            ->setVerifyClientResult($verifyClientResult)
        ;
    }

    /**
     * Get VerifyClientResult value
     */
    public function getVerifyClientResult(): ?VerifyResponse
    {
        return $this->VerifyClientResult;
    }

    /**
     * Set VerifyClientResult value
     */
    public function setVerifyClientResult(?VerifyResponse $verifyClientResult = null): self
    {
        $this->VerifyClientResult = $verifyClientResult;

        return $this;
    }
}
