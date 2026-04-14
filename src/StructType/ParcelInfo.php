<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParcelInfo StructType
 */
#[\AllowDynamicProperties]
class ParcelInfo extends AbstractStructBase
{
    /**
     * The BarcodeSource
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $BarcodeSource = null;
    /**
     * The BarcodeId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $BarcodeId = null;

    /**
     * Constructor method for ParcelInfo
     *
     * @uses ParcelInfo::setBarcodeSource()
     * @uses ParcelInfo::setBarcodeId()
     */
    public function __construct(?string $barcodeSource = null, ?string $barcodeId = null)
    {
        $this
            ->setBarcodeSource($barcodeSource)
            ->setBarcodeId($barcodeId)
        ;
    }

    /**
     * Get BarcodeSource value
     */
    public function getBarcodeSource(): ?string
    {
        return $this->BarcodeSource;
    }

    /**
     * Set BarcodeSource value
     */
    public function setBarcodeSource(?string $barcodeSource = null): self
    {
        // validation for constraint: string
        if (null !== $barcodeSource && !\is_string($barcodeSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeSource, true), \gettype($barcodeSource)), __LINE__);
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
