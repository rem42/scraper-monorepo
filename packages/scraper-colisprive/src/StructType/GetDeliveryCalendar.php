<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDeliveryCalendar StructType
 */
#[\AllowDynamicProperties]
class GetDeliveryCalendar extends AbstractStructBase
{
    /**
     * The GetDeliveryCalendarRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?GetDeliveryCalendarRequest $GetDeliveryCalendarRequest;

    /**
     * Constructor method for GetDeliveryCalendar
     *
     * @uses GetDeliveryCalendar::setGetDeliveryCalendarRequest()
     */
    public function __construct(?GetDeliveryCalendarRequest $getDeliveryCalendarRequest)
    {
        $this
            ->setGetDeliveryCalendarRequest($getDeliveryCalendarRequest)
        ;
    }

    /**
     * Get GetDeliveryCalendarRequest value
     */
    public function getGetDeliveryCalendarRequest(): GetDeliveryCalendarRequest
    {
        return $this->GetDeliveryCalendarRequest;
    }

    /**
     * Set GetDeliveryCalendarRequest value
     */
    public function setGetDeliveryCalendarRequest(?GetDeliveryCalendarRequest $getDeliveryCalendarRequest): self
    {
        $this->GetDeliveryCalendarRequest = $getDeliveryCalendarRequest;

        return $this;
    }
}
