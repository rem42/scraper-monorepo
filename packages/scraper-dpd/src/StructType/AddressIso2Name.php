<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for AddressIso2Name StructType
 */
#[\AllowDynamicProperties]
class AddressIso2Name extends AddressName
{
    /**
     * The CountryPrefixIso2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CountryPrefixIso2 = null;

    /**
     * Constructor method for AddressIso2Name
     *
     * @uses AddressIso2Name::setCountryPrefixIso2()
     */
    public function __construct(?string $countryPrefixIso2 = null)
    {
        $this
            ->setCountryPrefixIso2($countryPrefixIso2)
        ;
    }

    /**
     * Get CountryPrefixIso2 value
     */
    public function getCountryPrefixIso2(): ?string
    {
        return $this->CountryPrefixIso2;
    }

    /**
     * Set CountryPrefixIso2 value
     */
    public function setCountryPrefixIso2(?string $countryPrefixIso2 = null): self
    {
        // validation for constraint: string
        if (null !== $countryPrefixIso2 && !\is_string($countryPrefixIso2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryPrefixIso2, true), \gettype($countryPrefixIso2)), __LINE__);
        }
        $this->CountryPrefixIso2 = $countryPrefixIso2;

        return $this;
    }
}
