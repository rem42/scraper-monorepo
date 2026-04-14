<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Set2ndDelivery StructType
 */
#[\AllowDynamicProperties]
class Set2ndDelivery extends AbstractStructBase
{
    /**
     * The Set2ndDeliveryRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?Set2ndDeliveryRequest $Set2ndDeliveryRequest;

    /**
     * Constructor method for Set2ndDelivery
     *
     * @uses Set2ndDelivery::setSet2ndDeliveryRequest()
     */
    public function __construct(?Set2ndDeliveryRequest $set2ndDeliveryRequest)
    {
        $this
            ->setSet2ndDeliveryRequest($set2ndDeliveryRequest)
        ;
    }

    /**
     * Get Set2ndDeliveryRequest value
     */
    public function getSet2ndDeliveryRequest(): Set2ndDeliveryRequest
    {
        return $this->Set2ndDeliveryRequest;
    }

    /**
     * Set Set2ndDeliveryRequest value
     */
    public function setSet2ndDeliveryRequest(?Set2ndDeliveryRequest $set2ndDeliveryRequest): self
    {
        $this->Set2ndDeliveryRequest = $set2ndDeliveryRequest;

        return $this;
    }
}
