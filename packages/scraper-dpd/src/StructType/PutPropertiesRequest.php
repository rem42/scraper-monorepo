<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PutPropertiesRequest StructType
 */
#[\AllowDynamicProperties]
class PutPropertiesRequest extends AbstractStructBase
{
    /**
     * The ShipperNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $ShipperNumber;
    /**
     * The Customer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Customer $Customer = null;
    /**
     * The HardwareId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $HardwareId = null;
    /**
     * The Options
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Options = null;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfPropertyEntry $Properties = null;
    /**
     * The Sum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Sum = null;

    /**
     * Constructor method for PutPropertiesRequest
     *
     * @uses PutPropertiesRequest::setShipperNumber()
     * @uses PutPropertiesRequest::setCustomer()
     * @uses PutPropertiesRequest::setHardwareId()
     * @uses PutPropertiesRequest::setOptions()
     * @uses PutPropertiesRequest::setProperties()
     * @uses PutPropertiesRequest::setSum()
     */
    public function __construct(int $shipperNumber, ?Customer $customer = null, ?string $hardwareId = null, ?string $options = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfPropertyEntry $properties = null, ?string $sum = null)
    {
        $this
            ->setShipperNumber($shipperNumber)
            ->setCustomer($customer)
            ->setHardwareId($hardwareId)
            ->setOptions($options)
            ->setProperties($properties)
            ->setSum($sum)
        ;
    }

    /**
     * Get ShipperNumber value
     */
    public function getShipperNumber(): int
    {
        return $this->ShipperNumber;
    }

    /**
     * Set ShipperNumber value
     */
    public function setShipperNumber(int $shipperNumber): self
    {
        // validation for constraint: int
        if (null !== $shipperNumber && !(\is_int($shipperNumber) || ctype_digit($shipperNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($shipperNumber, true), \gettype($shipperNumber)), __LINE__);
        }
        $this->ShipperNumber = $shipperNumber;

        return $this;
    }

    /**
     * Get Customer value
     */
    public function getCustomer(): ?Customer
    {
        return $this->Customer;
    }

    /**
     * Set Customer value
     */
    public function setCustomer(?Customer $customer = null): self
    {
        $this->Customer = $customer;

        return $this;
    }

    /**
     * Get HardwareId value
     */
    public function getHardwareId(): ?string
    {
        return $this->HardwareId;
    }

    /**
     * Set HardwareId value
     */
    public function setHardwareId(?string $hardwareId = null): self
    {
        // validation for constraint: string
        if (null !== $hardwareId && !\is_string($hardwareId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hardwareId, true), \gettype($hardwareId)), __LINE__);
        }
        $this->HardwareId = $hardwareId;

        return $this;
    }

    /**
     * Get Options value
     */
    public function getOptions(): ?string
    {
        return $this->Options;
    }

    /**
     * Set Options value
     */
    public function setOptions(?string $options = null): self
    {
        // validation for constraint: string
        if (null !== $options && !\is_string($options)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($options, true), \gettype($options)), __LINE__);
        }
        $this->Options = $options;

        return $this;
    }

    /**
     * Get Properties value
     */
    public function getProperties(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfPropertyEntry
    {
        return $this->Properties;
    }

    /**
     * Set Properties value
     */
    public function setProperties(?\Scraper\ScraperDPD\ArrayType\ArrayOfPropertyEntry $properties = null): self
    {
        $this->Properties = $properties;

        return $this;
    }

    /**
     * Get Sum value
     */
    public function getSum(): ?string
    {
        return $this->Sum;
    }

    /**
     * Set Sum value
     */
    public function setSum(?string $sum = null): self
    {
        // validation for constraint: string
        if (null !== $sum && !\is_string($sum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sum, true), \gettype($sum)), __LINE__);
        }
        $this->Sum = $sum;

        return $this;
    }
}
