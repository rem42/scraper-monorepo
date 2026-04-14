<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDeliveryCalendarResponse StructType
 */
#[\AllowDynamicProperties]
class GetDeliveryCalendarResponse extends AbstractStructBase
{
    /**
     * The GetDeliveryCalendarResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetDeliveryCalendarReturn $GetDeliveryCalendarResult = null;

    /**
     * Constructor method for GetDeliveryCalendarResponse
     *
     * @uses GetDeliveryCalendarResponse::setGetDeliveryCalendarResult()
     */
    public function __construct(?GetDeliveryCalendarReturn $getDeliveryCalendarResult = null)
    {
        $this
            ->setGetDeliveryCalendarResult($getDeliveryCalendarResult)
        ;
    }

    /**
     * Get GetDeliveryCalendarResult value
     */
    public function getGetDeliveryCalendarResult(): ?GetDeliveryCalendarReturn
    {
        return $this->GetDeliveryCalendarResult;
    }

    /**
     * Set GetDeliveryCalendarResult value
     */
    public function setGetDeliveryCalendarResult(?GetDeliveryCalendarReturn $getDeliveryCalendarResult = null): self
    {
        $this->GetDeliveryCalendarResult = $getDeliveryCalendarResult;

        return $this;
    }
}
