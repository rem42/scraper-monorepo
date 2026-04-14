<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for RetourShipmentRequest StructType
 */
#[\AllowDynamicProperties]
class RetourShipmentRequest extends RetourShipmentBaseRequest
{
    /**
     * The countrycode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $countrycode = null;
    /**
     * The centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $centernumber = null;
    /**
     * The original_parcelnumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $original_parcelnumber = null;

    /**
     * Constructor method for RetourShipmentRequest
     *
     * @uses RetourShipmentRequest::setCountrycode()
     * @uses RetourShipmentRequest::setCenternumber()
     * @uses RetourShipmentRequest::setOriginal_parcelnumber()
     */
    public function __construct(?string $countrycode = null, ?string $centernumber = null, ?string $original_parcelnumber = null)
    {
        $this
            ->setCountrycode($countrycode)
            ->setCenternumber($centernumber)
            ->setOriginal_parcelnumber($original_parcelnumber)
        ;
    }

    /**
     * Get countrycode value
     */
    public function getCountrycode(): ?string
    {
        return $this->countrycode;
    }

    /**
     * Set countrycode value
     */
    public function setCountrycode(?string $countrycode = null): self
    {
        // validation for constraint: string
        if (null !== $countrycode && !\is_string($countrycode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countrycode, true), \gettype($countrycode)), __LINE__);
        }
        $this->countrycode = $countrycode;

        return $this;
    }

    /**
     * Get centernumber value
     */
    public function getCenternumber(): ?string
    {
        return $this->centernumber;
    }

    /**
     * Set centernumber value
     */
    public function setCenternumber(?string $centernumber = null): self
    {
        // validation for constraint: string
        if (null !== $centernumber && !\is_string($centernumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($centernumber, true), \gettype($centernumber)), __LINE__);
        }
        $this->centernumber = $centernumber;

        return $this;
    }

    /**
     * Get original_parcelnumber value
     */
    public function getOriginal_parcelnumber(): ?string
    {
        return $this->original_parcelnumber;
    }

    /**
     * Set original_parcelnumber value
     */
    public function setOriginal_parcelnumber(?string $original_parcelnumber = null): self
    {
        // validation for constraint: string
        if (null !== $original_parcelnumber && !\is_string($original_parcelnumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($original_parcelnumber, true), \gettype($original_parcelnumber)), __LINE__);
        }
        $this->original_parcelnumber = $original_parcelnumber;

        return $this;
    }
}
