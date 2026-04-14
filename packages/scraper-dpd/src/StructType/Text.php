<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Text StructType
 */
#[\AllowDynamicProperties]
class Text extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $id;
    /**
     * The text
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $text = null;

    /**
     * Constructor method for Text
     *
     * @uses Text::setId()
     * @uses Text::setText()
     */
    public function __construct(int $id, ?string $text = null)
    {
        $this
            ->setId($id)
            ->setText($text)
        ;
    }

    /**
     * Get id value
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set id value
     */
    public function setId(int $id): self
    {
        // validation for constraint: int
        if (null !== $id && !(\is_int($id) || ctype_digit($id))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), \gettype($id)), __LINE__);
        }
        $this->id = $id;

        return $this;
    }

    /**
     * Get text value
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Set text value
     */
    public function setText(?string $text = null): self
    {
        // validation for constraint: string
        if (null !== $text && !\is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), \gettype($text)), __LINE__);
        }
        $this->text = $text;

        return $this;
    }
}
