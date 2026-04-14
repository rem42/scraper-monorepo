<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for GetShipmentEntry StructType
 */
#[\AllowDynamicProperties]
class GetShipmentEntry extends ShipmentDataExtendedBc
{
    /**
     * The LinkedShipmentType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $LinkedShipmentType;

    /**
     * Constructor method for GetShipmentEntry
     *
     * @uses GetShipmentEntry::setLinkedShipmentType()
     */
    public function __construct(?string $linkedShipmentType)
    {
        $this
            ->setLinkedShipmentType($linkedShipmentType)
        ;
    }

    /**
     * Get LinkedShipmentType value
     */
    public function getLinkedShipmentType(): string
    {
        return $this->LinkedShipmentType;
    }

    /**
     * Set LinkedShipmentType value
     *
     * @uses \Scraper\ScraperDPD\EnumType\ELinkedShipmentType::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\ELinkedShipmentType::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setLinkedShipmentType(?string $linkedShipmentType): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\ELinkedShipmentType::valueIsValid($linkedShipmentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\ELinkedShipmentType', \is_array($linkedShipmentType) ? implode(', ', $linkedShipmentType) : var_export($linkedShipmentType, true), implode(', ', \Scraper\ScraperDPD\EnumType\ELinkedShipmentType::getValidValues())), __LINE__);
        }
        $this->LinkedShipmentType = $linkedShipmentType;

        return $this;
    }
}
