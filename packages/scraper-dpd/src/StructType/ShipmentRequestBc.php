<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ShipmentRequestBc StructType
 */
#[\AllowDynamicProperties]
class ShipmentRequestBc extends ShipmentRequestBcBase
{
    /**
     * The Language
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Language = null;
    /**
     * The GetServices
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?bool $GetServices;

    /**
     * Constructor method for ShipmentRequestBc
     *
     * @uses ShipmentRequestBc::setLanguage()
     * @uses ShipmentRequestBc::setGetServices()
     */
    public function __construct(?string $language = null, ?bool $getServices)
    {
        $this
            ->setLanguage($language)
            ->setGetServices($getServices)
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
     * Get GetServices value
     */
    public function getGetServices(): bool
    {
        return $this->GetServices;
    }

    /**
     * Set GetServices value
     */
    public function setGetServices(?bool $getServices): self
    {
        // validation for constraint: boolean
        if (null !== $getServices && !\is_bool($getServices)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($getServices, true), \gettype($getServices)), __LINE__);
        }
        $this->GetServices = $getServices;

        return $this;
    }
}
