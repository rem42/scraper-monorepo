<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Reason StructType
 */
#[\AllowDynamicProperties]
class Reason extends AbstractStructBase
{
    /**
     * The Language
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Language = null;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Text = null;

    /**
     * Constructor method for Reason
     *
     * @uses Reason::setLanguage()
     * @uses Reason::setText()
     */
    public function __construct(?string $language = null, ?string $text = null)
    {
        $this
            ->setLanguage($language)
            ->setText($text)
        ;
    }

    /**
     * Get Language value
     */
    public function getLanguage(): ?string
    {
        return $this->Language;
    }

    /**
     * Set Language value
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (null !== $language && !\is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), \gettype($language)), __LINE__);
        }
        $this->Language = $language;

        return $this;
    }

    /**
     * Get Text value
     */
    public function getText(): ?string
    {
        return $this->Text;
    }

    /**
     * Set Text value
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (null !== $text && !\is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), \gettype($text)), __LINE__);
        }
        $this->Text = $text;

        return $this;
    }
}
