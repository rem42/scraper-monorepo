<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for BcDataExt StructType
 */
#[\AllowDynamicProperties]
class BcDataExt extends BcData
{
    /**
     * The BarCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $BarCode = null;

    /**
     * Constructor method for BcDataExt
     *
     * @uses BcDataExt::setBarCode()
     */
    public function __construct(?string $barCode = null)
    {
        $this
            ->setBarCode($barCode)
        ;
    }

    /**
     * Get BarCode value
     */
    public function getBarCode(): ?string
    {
        return $this->BarCode;
    }

    /**
     * Set BarCode value
     */
    public function setBarCode(?string $barCode = null): self
    {
        // validation for constraint: string
        if (null !== $barCode && !\is_string($barCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barCode, true), \gettype($barCode)), __LINE__);
        }
        $this->BarCode = $barCode;

        return $this;
    }
}
