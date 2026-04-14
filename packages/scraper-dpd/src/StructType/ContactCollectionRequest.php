<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ContactCollectionRequest StructType
 */
#[\AllowDynamicProperties]
class ContactCollectionRequest extends Contact
{
    /**
     * The shipper_email
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $shipper_email = null;
    /**
     * The shipper_mobil
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $shipper_mobil = null;
    /**
     * The shipperNotificationType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $shipperNotificationType;

    /**
     * Constructor method for ContactCollectionRequest
     *
     * @uses ContactCollectionRequest::setShipper_email()
     * @uses ContactCollectionRequest::setShipper_mobil()
     * @uses ContactCollectionRequest::setShipperNotificationType()
     */
    public function __construct(?string $shipper_email = null, ?string $shipper_mobil = null, ?string $shipperNotificationType)
    {
        $this
            ->setShipper_email($shipper_email)
            ->setShipper_mobil($shipper_mobil)
            ->setShipperNotificationType($shipperNotificationType)
        ;
    }

    /**
     * Get shipper_email value
     */
    public function getShipper_email(): ?string
    {
        return $this->shipper_email;
    }

    /**
     * Set shipper_email value
     */
    public function setShipper_email(?string $shipper_email = null): self
    {
        // validation for constraint: string
        if (null !== $shipper_email && !\is_string($shipper_email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipper_email, true), \gettype($shipper_email)), __LINE__);
        }
        $this->shipper_email = $shipper_email;

        return $this;
    }

    /**
     * Get shipper_mobil value
     */
    public function getShipper_mobil(): ?string
    {
        return $this->shipper_mobil;
    }

    /**
     * Set shipper_mobil value
     */
    public function setShipper_mobil(?string $shipper_mobil = null): self
    {
        // validation for constraint: string
        if (null !== $shipper_mobil && !\is_string($shipper_mobil)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipper_mobil, true), \gettype($shipper_mobil)), __LINE__);
        }
        $this->shipper_mobil = $shipper_mobil;

        return $this;
    }

    /**
     * Get shipperNotificationType value
     */
    public function getShipperNotificationType(): string
    {
        return $this->shipperNotificationType;
    }

    /**
     * Set shipperNotificationType value
     *
     * @uses \Scraper\ScraperDPD\EnumType\EtypeShipperContact::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\EtypeShipperContact::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setShipperNotificationType(?string $shipperNotificationType): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\EtypeShipperContact::valueIsValid($shipperNotificationType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\EtypeShipperContact', \is_array($shipperNotificationType) ? implode(', ', $shipperNotificationType) : var_export($shipperNotificationType, true), implode(', ', \Scraper\ScraperDPD\EnumType\EtypeShipperContact::getValidValues())), __LINE__);
        }
        $this->shipperNotificationType = $shipperNotificationType;

        return $this;
    }
}
