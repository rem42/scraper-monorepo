<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyResponse StructType
 */
#[\AllowDynamicProperties]
class VerifyResponse extends AbstractStructBase
{
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Data = null;

    /**
     * Constructor method for VerifyResponse
     *
     * @uses VerifyResponse::setData()
     */
    public function __construct(?string $data = null)
    {
        $this
            ->setData($data)
        ;
    }

    /**
     * Get Data value
     */
    public function getData(): ?string
    {
        return $this->Data;
    }

    /**
     * Set Data value
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (null !== $data && !\is_string($data)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), \gettype($data)), __LINE__);
        }
        $this->Data = $data;

        return $this;
    }
}
