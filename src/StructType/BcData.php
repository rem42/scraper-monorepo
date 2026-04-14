<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BcData StructType
 */
#[\AllowDynamicProperties]
class BcData extends AbstractStructBase
{
    /**
     * The BarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $BarcodeSource;
    /**
     * The BarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $BarcodeId = null;

    /**
     * Constructor method for BcData
     *
     * @uses BcData::setBarcodeSource()
     * @uses BcData::setBarcodeId()
     */
    public function __construct(int $barcodeSource, ?string $barcodeId = null)
    {
        $this
            ->setBarcodeSource($barcodeSource)
            ->setBarcodeId($barcodeId)
        ;
    }

    /**
     * Get BarcodeSource value
     */
    public function getBarcodeSource(): int
    {
        return $this->BarcodeSource;
    }

    /**
     * Set BarcodeSource value
     */
    public function setBarcodeSource(int $barcodeSource): self
    {
        // validation for constraint: int
        if (null !== $barcodeSource && !(\is_int($barcodeSource) || ctype_digit($barcodeSource))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($barcodeSource, true), \gettype($barcodeSource)), __LINE__);
        }
        $this->BarcodeSource = $barcodeSource;

        return $this;
    }

    /**
     * Get BarcodeId value
     */
    public function getBarcodeId(): ?string
    {
        return $this->BarcodeId;
    }

    /**
     * Set BarcodeId value
     */
    public function setBarcodeId(?string $barcodeId = null): self
    {
        // validation for constraint: string
        if (null !== $barcodeId && !\is_string($barcodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeId, true), \gettype($barcodeId)), __LINE__);
        }
        $this->BarcodeId = $barcodeId;

        return $this;
    }
}
