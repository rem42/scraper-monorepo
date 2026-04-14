<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for GetShipmentBcMultiRequest StructType
 */
#[\AllowDynamicProperties]
class GetShipmentBcMultiRequest extends ShipmentRequestBc
{
    /**
     * The LinkedType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $LinkedType;

    /**
     * Constructor method for GetShipmentBcMultiRequest
     *
     * @uses GetShipmentBcMultiRequest::setLinkedType()
     */
    public function __construct(?string $linkedType)
    {
        $this
            ->setLinkedType($linkedType)
        ;
    }

    /**
     * Get LinkedType value
     */
    public function getLinkedType(): string
    {
        return $this->LinkedType;
    }

    /**
     * Set LinkedType value
     *
     * @uses \Scraper\ScraperDPD\EnumType\ELinkedType::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\ELinkedType::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setLinkedType(?string $linkedType): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\ELinkedType::valueIsValid($linkedType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\ELinkedType', \is_array($linkedType) ? implode(', ', $linkedType) : var_export($linkedType, true), implode(', ', \Scraper\ScraperDPD\EnumType\ELinkedType::getValidValues())), __LINE__);
        }
        $this->LinkedType = $linkedType;

        return $this;
    }
}
