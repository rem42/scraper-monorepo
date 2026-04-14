<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BarcodeData StructType
 */
#[\AllowDynamicProperties]
class BarcodeData extends AbstractStructBase
{
    /**
     * The Identifier
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $Identifier;
    /**
     * The BarcodeValue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $BarcodeValue = null;
    /**
     * The BarcodeText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $BarcodeText = null;
    /**
     * The bcImage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $bcImage = null;

    /**
     * Constructor method for BarcodeData
     *
     * @uses BarcodeData::setIdentifier()
     * @uses BarcodeData::setBarcodeValue()
     * @uses BarcodeData::setBarcodeText()
     * @uses BarcodeData::setBcImage()
     */
    public function __construct(string $identifier, ?string $barcodeValue = null, ?string $barcodeText = null, ?string $bcImage = null)
    {
        $this
            ->setIdentifier($identifier)
            ->setBarcodeValue($barcodeValue)
            ->setBarcodeText($barcodeText)
            ->setBcImage($bcImage)
        ;
    }

    /**
     * Get Identifier value
     */
    public function getIdentifier(): string
    {
        return $this->Identifier;
    }

    /**
     * Set Identifier value
     *
     * @uses \Scraper\ScraperDPD\EnumType\BcIdentifier::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\BcIdentifier::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setIdentifier(string $identifier): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\BcIdentifier::valueIsValid($identifier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\BcIdentifier', \is_array($identifier) ? implode(', ', $identifier) : var_export($identifier, true), implode(', ', \Scraper\ScraperDPD\EnumType\BcIdentifier::getValidValues())), __LINE__);
        }
        $this->Identifier = $identifier;

        return $this;
    }

    /**
     * Get BarcodeValue value
     */
    public function getBarcodeValue(): ?string
    {
        return $this->BarcodeValue;
    }

    /**
     * Set BarcodeValue value
     */
    public function setBarcodeValue(?string $barcodeValue = null): self
    {
        // validation for constraint: string
        if (null !== $barcodeValue && !\is_string($barcodeValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeValue, true), \gettype($barcodeValue)), __LINE__);
        }
        $this->BarcodeValue = $barcodeValue;

        return $this;
    }

    /**
     * Get BarcodeText value
     */
    public function getBarcodeText(): ?string
    {
        return $this->BarcodeText;
    }

    /**
     * Set BarcodeText value
     */
    public function setBarcodeText(?string $barcodeText = null): self
    {
        // validation for constraint: string
        if (null !== $barcodeText && !\is_string($barcodeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcodeText, true), \gettype($barcodeText)), __LINE__);
        }
        $this->BarcodeText = $barcodeText;

        return $this;
    }

    /**
     * Get bcImage value
     */
    public function getBcImage(): ?string
    {
        return $this->bcImage;
    }

    /**
     * Set bcImage value
     */
    public function setBcImage(?string $bcImage = null): self
    {
        // validation for constraint: string
        if (null !== $bcImage && !\is_string($bcImage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bcImage, true), \gettype($bcImage)), __LINE__);
        }
        $this->bcImage = $bcImage;

        return $this;
    }
}
