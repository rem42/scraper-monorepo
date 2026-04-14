<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Shipment StructType
 */
#[\AllowDynamicProperties]
class Shipment extends AbstractStructBase
{
    /**
     * The countrycode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $countrycode;
    /**
     * The centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $centernumber;
    /**
     * The parcelnumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $parcelnumber;
    /**
     * The barcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $barcode;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $type;

    /**
     * Constructor method for Shipment
     *
     * @uses Shipment::setCountrycode()
     * @uses Shipment::setCenternumber()
     * @uses Shipment::setParcelnumber()
     * @uses Shipment::setBarcode()
     * @uses Shipment::setType()
     */
    public function __construct(int $countrycode, int $centernumber, int $parcelnumber, int $barcode, string $type)
    {
        $this
            ->setCountrycode($countrycode)
            ->setCenternumber($centernumber)
            ->setParcelnumber($parcelnumber)
            ->setBarcode($barcode)
            ->setType($type)
        ;
    }

    /**
     * Get countrycode value
     */
    public function getCountrycode(): int
    {
        return $this->countrycode;
    }

    /**
     * Set countrycode value
     */
    public function setCountrycode(int $countrycode): self
    {
        // validation for constraint: int
        if (null !== $countrycode && !(\is_int($countrycode) || ctype_digit($countrycode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($countrycode, true), \gettype($countrycode)), __LINE__);
        }
        $this->countrycode = $countrycode;

        return $this;
    }

    /**
     * Get centernumber value
     */
    public function getCenternumber(): int
    {
        return $this->centernumber;
    }

    /**
     * Set centernumber value
     */
    public function setCenternumber(int $centernumber): self
    {
        // validation for constraint: int
        if (null !== $centernumber && !(\is_int($centernumber) || ctype_digit($centernumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($centernumber, true), \gettype($centernumber)), __LINE__);
        }
        $this->centernumber = $centernumber;

        return $this;
    }

    /**
     * Get parcelnumber value
     */
    public function getParcelnumber(): int
    {
        return $this->parcelnumber;
    }

    /**
     * Set parcelnumber value
     */
    public function setParcelnumber(int $parcelnumber): self
    {
        // validation for constraint: int
        if (null !== $parcelnumber && !(\is_int($parcelnumber) || ctype_digit($parcelnumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parcelnumber, true), \gettype($parcelnumber)), __LINE__);
        }
        $this->parcelnumber = $parcelnumber;

        return $this;
    }

    /**
     * Get barcode value
     */
    public function getBarcode(): int
    {
        return $this->barcode;
    }

    /**
     * Set barcode value
     */
    public function setBarcode(int $barcode): self
    {
        // validation for constraint: int
        if (null !== $barcode && !(\is_int($barcode) || ctype_digit($barcode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($barcode, true), \gettype($barcode)), __LINE__);
        }
        $this->barcode = $barcode;

        return $this;
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
     * @uses \Scraper\ScraperDPD\EnumType\Etype::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\Etype::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\Etype::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\Etype', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\Etype::getValidValues())), __LINE__);
        }
        $this->type = $type;

        return $this;
    }
}
