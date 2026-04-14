<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDeliveryCalendarReturn StructType
 */
#[\AllowDynamicProperties]
class GetDeliveryCalendarReturn extends AbstractStructBase
{
    /**
     * The WSResp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ResponseObject $WSResp = null;
    /**
     * The DlvrCalendar
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     *
     * @var array<\Scraper\ScraperColisPrive\StructType\DeliveryDateObject>
     */
    protected ?array $DlvrCalendar = null;

    /**
     * Constructor method for GetDeliveryCalendarReturn
     *
     * @uses GetDeliveryCalendarReturn::setWSResp()
     * @uses GetDeliveryCalendarReturn::setDlvrCalendar()
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\DeliveryDateObject> $dlvrCalendar
     */
    public function __construct(?ResponseObject $wSResp = null, ?array $dlvrCalendar = null)
    {
        $this
            ->setWSResp($wSResp)
            ->setDlvrCalendar($dlvrCalendar)
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
     * Get DlvrCalendar value
     *
     * @return array<\Scraper\ScraperColisPrive\StructType\DeliveryDateObject>
     */
    public function getDlvrCalendar(): ?array
    {
        return $this->DlvrCalendar;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setDlvrCalendar method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDlvrCalendar method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDlvrCalendarForArrayConstraintFromSetDlvrCalendar(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $getDeliveryCalendarReturnDlvrCalendarItem) {
            // validation for constraint: itemType
            if (!$getDeliveryCalendarReturnDlvrCalendarItem instanceof DeliveryDateObject) {
                $invalidValues[] = \is_object($getDeliveryCalendarReturnDlvrCalendarItem) ? $getDeliveryCalendarReturnDlvrCalendarItem::class : sprintf('%s(%s)', \gettype($getDeliveryCalendarReturnDlvrCalendarItem), var_export($getDeliveryCalendarReturnDlvrCalendarItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The DlvrCalendar property can only contain items of type \Scraper\ScraperColisPrive\StructType\DeliveryDateObject, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set DlvrCalendar value
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\DeliveryDateObject> $dlvrCalendar
     *
     * @throws \InvalidArgumentException
     */
    public function setDlvrCalendar(?array $dlvrCalendar = null): self
    {
        // validation for constraint: array
        if ('' !== ($dlvrCalendarArrayErrorMessage = self::validateDlvrCalendarForArrayConstraintFromSetDlvrCalendar($dlvrCalendar))) {
            throw new \InvalidArgumentException($dlvrCalendarArrayErrorMessage, __LINE__);
        }
        $this->DlvrCalendar = $dlvrCalendar;

        return $this;
    }

    /**
     * Add item to DlvrCalendar value
     *
     * @throws \InvalidArgumentException
     */
    public function addToDlvrCalendar(DeliveryDateObject $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof DeliveryDateObject) {
            throw new \InvalidArgumentException(sprintf('The DlvrCalendar property can only contain items of type \Scraper\ScraperColisPrive\StructType\DeliveryDateObject, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->DlvrCalendar[] = $item;

        return $this;
    }
}
