<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentBc StructType
 */
#[\AllowDynamicProperties]
class ShipmentBc extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $Type;
    /**
     * The Shipment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?BcDataExt $Shipment = null;

    /**
     * Constructor method for ShipmentBc
     *
     * @uses ShipmentBc::setType()
     * @uses ShipmentBc::setShipment()
     */
    public function __construct(string $type, ?BcDataExt $shipment = null)
    {
        $this
            ->setType($type)
            ->setShipment($shipment)
        ;
    }

    /**
     * Get Type value
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Set Type value
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
        $this->Type = $type;

        return $this;
    }

    /**
     * Get Shipment value
     */
    public function getShipment(): ?BcDataExt
    {
        return $this->Shipment;
    }

    /**
     * Set Shipment value
     */
    public function setShipment(?BcDataExt $shipment = null): self
    {
        $this->Shipment = $shipment;

        return $this;
    }
}
