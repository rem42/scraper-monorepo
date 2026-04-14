<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParcelDimension StructType
 */
#[\AllowDynamicProperties]
class ParcelDimension extends AbstractStructBase
{
    /**
     * The Length
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Length = null;
    /**
     * The Width
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Width = null;
    /**
     * The Height
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Height = null;
    /**
     * The Girth
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Girth = null;

    /**
     * Constructor method for ParcelDimension
     *
     * @uses ParcelDimension::setLength()
     * @uses ParcelDimension::setWidth()
     * @uses ParcelDimension::setHeight()
     * @uses ParcelDimension::setGirth()
     */
    public function __construct(?string $length = null, ?string $width = null, ?string $height = null, ?string $girth = null)
    {
        $this
            ->setLength($length)
            ->setWidth($width)
            ->setHeight($height)
            ->setGirth($girth)
        ;
    }

    /**
     * Get Length value
     */
    public function getLength(): ?string
    {
        return $this->Length;
    }

    /**
     * Set Length value
     */
    public function setLength(?string $length = null): self
    {
        // validation for constraint: string
        if (null !== $length && !\is_string($length)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($length, true), \gettype($length)), __LINE__);
        }
        $this->Length = $length;

        return $this;
    }

    /**
     * Get Width value
     */
    public function getWidth(): ?string
    {
        return $this->Width;
    }

    /**
     * Set Width value
     */
    public function setWidth(?string $width = null): self
    {
        // validation for constraint: string
        if (null !== $width && !\is_string($width)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($width, true), \gettype($width)), __LINE__);
        }
        $this->Width = $width;

        return $this;
    }

    /**
     * Get Height value
     */
    public function getHeight(): ?string
    {
        return $this->Height;
    }

    /**
     * Set Height value
     */
    public function setHeight(?string $height = null): self
    {
        // validation for constraint: string
        if (null !== $height && !\is_string($height)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($height, true), \gettype($height)), __LINE__);
        }
        $this->Height = $height;

        return $this;
    }

    /**
     * Get Girth value
     */
    public function getGirth(): ?string
    {
        return $this->Girth;
    }

    /**
     * Set Girth value
     */
    public function setGirth(?string $girth = null): self
    {
        // validation for constraint: string
        if (null !== $girth && !\is_string($girth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($girth, true), \gettype($girth)), __LINE__);
        }
        $this->Girth = $girth;

        return $this;
    }
}
