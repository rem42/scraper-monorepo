<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ShipmentData StructType
 */
#[\AllowDynamicProperties]
class ShipmentData extends ShipmentDataBase
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
     * The parcelnumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $parcelnumber = null;
    /**
     * The countrycode_retour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $countrycode_retour = null;
    /**
     * The centernumber_retour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $centernumber_retour = null;
    /**
     * The parcelnumber_retour
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $parcelnumber_retour = null;

    /**
     * Constructor method for ShipmentData
     *
     * @uses ShipmentData::setCountrycode()
     * @uses ShipmentData::setCenternumber()
     * @uses ShipmentData::setParcelnumber()
     * @uses ShipmentData::setCountrycode_retour()
     * @uses ShipmentData::setCenternumber_retour()
     * @uses ShipmentData::setParcelnumber_retour()
     */
    public function __construct(?string $countrycode = null, ?string $centernumber = null, ?string $parcelnumber = null, ?string $countrycode_retour = null, ?string $centernumber_retour = null, ?string $parcelnumber_retour = null)
    {
        $this
            ->setCountrycode($countrycode)
            ->setCenternumber($centernumber)
            ->setParcelnumber($parcelnumber)
            ->setCountrycode_retour($countrycode_retour)
            ->setCenternumber_retour($centernumber_retour)
            ->setParcelnumber_retour($parcelnumber_retour)
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
     * Get parcelnumber value
     */
    public function getParcelnumber(): ?string
    {
        return $this->parcelnumber;
    }

    /**
     * Set parcelnumber value
     */
    public function setParcelnumber(?string $parcelnumber = null): self
    {
        // validation for constraint: string
        if (null !== $parcelnumber && !\is_string($parcelnumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelnumber, true), \gettype($parcelnumber)), __LINE__);
        }
        $this->parcelnumber = $parcelnumber;

        return $this;
    }

    /**
     * Get countrycode_retour value
     */
    public function getCountrycode_retour(): ?string
    {
        return $this->countrycode_retour;
    }

    /**
     * Set countrycode_retour value
     */
    public function setCountrycode_retour(?string $countrycode_retour = null): self
    {
        // validation for constraint: string
        if (null !== $countrycode_retour && !\is_string($countrycode_retour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countrycode_retour, true), \gettype($countrycode_retour)), __LINE__);
        }
        $this->countrycode_retour = $countrycode_retour;

        return $this;
    }

    /**
     * Get centernumber_retour value
     */
    public function getCenternumber_retour(): ?string
    {
        return $this->centernumber_retour;
    }

    /**
     * Set centernumber_retour value
     */
    public function setCenternumber_retour(?string $centernumber_retour = null): self
    {
        // validation for constraint: string
        if (null !== $centernumber_retour && !\is_string($centernumber_retour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($centernumber_retour, true), \gettype($centernumber_retour)), __LINE__);
        }
        $this->centernumber_retour = $centernumber_retour;

        return $this;
    }

    /**
     * Get parcelnumber_retour value
     */
    public function getParcelnumber_retour(): ?string
    {
        return $this->parcelnumber_retour;
    }

    /**
     * Set parcelnumber_retour value
     */
    public function setParcelnumber_retour(?string $parcelnumber_retour = null): self
    {
        // validation for constraint: string
        if (null !== $parcelnumber_retour && !\is_string($parcelnumber_retour)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelnumber_retour, true), \gettype($parcelnumber_retour)), __LINE__);
        }
        $this->parcelnumber_retour = $parcelnumber_retour;

        return $this;
    }
}
