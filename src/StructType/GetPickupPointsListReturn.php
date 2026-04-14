<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickupPointsListReturn StructType
 */
#[\AllowDynamicProperties]
class GetPickupPointsListReturn extends AbstractStructBase
{
    /**
     * The WSResp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ResponseObject $WSResp = null;
    /**
     * The PcksList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     *
     * @var array<\Scraper\ScraperColisPrive\StructType\PickupPointDeliveryObject>
     */
    protected ?array $PcksList = null;

    /**
     * Constructor method for GetPickupPointsListReturn
     *
     * @uses GetPickupPointsListReturn::setWSResp()
     * @uses GetPickupPointsListReturn::setPcksList()
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\PickupPointDeliveryObject> $pcksList
     */
    public function __construct(?ResponseObject $wSResp = null, ?array $pcksList = null)
    {
        $this
            ->setWSResp($wSResp)
            ->setPcksList($pcksList)
        ;
    }

    /**
     * Get WSResp value
     */
    public function getWSResp(): ?ResponseObject
    {
        return $this->WSResp;
    }

    /**
     * Set WSResp value
     */
    public function setWSResp(?ResponseObject $wSResp = null): self
    {
        $this->WSResp = $wSResp;

        return $this;
    }

    /**
     * Get PcksList value
     *
     * @return array<\Scraper\ScraperColisPrive\StructType\PickupPointDeliveryObject>
     */
    public function getPcksList(): ?array
    {
        return $this->PcksList;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPcksList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPcksList method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePcksListForArrayConstraintFromSetPcksList(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $getPickupPointsListReturnPcksListItem) {
            // validation for constraint: itemType
            if (!$getPickupPointsListReturnPcksListItem instanceof PickupPointDeliveryObject) {
                $invalidValues[] = \is_object($getPickupPointsListReturnPcksListItem) ? $getPickupPointsListReturnPcksListItem::class : sprintf('%s(%s)', \gettype($getPickupPointsListReturnPcksListItem), var_export($getPickupPointsListReturnPcksListItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The PcksList property can only contain items of type \Scraper\ScraperColisPrive\StructType\PickupPointDeliveryObject, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set PcksList value
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\PickupPointDeliveryObject> $pcksList
     *
     * @throws \InvalidArgumentException
     */
    public function setPcksList(?array $pcksList = null): self
    {
        // validation for constraint: array
        if ('' !== ($pcksListArrayErrorMessage = self::validatePcksListForArrayConstraintFromSetPcksList($pcksList))) {
            throw new \InvalidArgumentException($pcksListArrayErrorMessage, __LINE__);
        }
        $this->PcksList = $pcksList;

        return $this;
    }

    /**
     * Add item to PcksList value
     *
     * @throws \InvalidArgumentException
     */
    public function addToPcksList(PickupPointDeliveryObject $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof PickupPointDeliveryObject) {
            throw new \InvalidArgumentException(sprintf('The PcksList property can only contain items of type \Scraper\ScraperColisPrive\StructType\PickupPointDeliveryObject, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->PcksList[] = $item;

        return $this;
    }
}
