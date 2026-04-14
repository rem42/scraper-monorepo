<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceNoticeAnswersRequest StructType
 */
#[\AllowDynamicProperties]
class ServiceNoticeAnswersRequest extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $type;
    /**
     * The language
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $language = null;

    /**
     * Constructor method for ServiceNoticeAnswersRequest
     *
     * @uses ServiceNoticeAnswersRequest::setType()
     * @uses ServiceNoticeAnswersRequest::setLanguage()
     */
    public function __construct(string $type, ?string $language = null)
    {
        $this
            ->setType($type)
            ->setLanguage($language)
        ;
    }

    /**
     * Get type value
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set type value
     *
     * @uses \Scraper\ScraperDPD\EnumType\ServiceNoticeType::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\ServiceNoticeType::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\ServiceNoticeType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\ServiceNoticeType', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\ServiceNoticeType::getValidValues())), __LINE__);
        }
        $this->type = $type;

        return $this;
    }

    /**
     * Get language value
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * Set language value
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (null !== $language && !\is_string($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), \gettype($language)), __LINE__);
        }
        $this->language = $language;

        return $this;
    }
}
