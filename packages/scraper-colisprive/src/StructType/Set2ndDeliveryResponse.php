<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Set2ndDeliveryResponse StructType
 */
#[\AllowDynamicProperties]
class Set2ndDeliveryResponse extends AbstractStructBase
{
    /**
     * The Set2ndDeliveryResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Set2ndDeliveryReturn $Set2ndDeliveryResult = null;

    /**
     * Constructor method for Set2ndDeliveryResponse
     *
     * @uses Set2ndDeliveryResponse::setSet2ndDeliveryResult()
     */
    public function __construct(?Set2ndDeliveryReturn $set2ndDeliveryResult = null)
    {
        $this
            ->setSet2ndDeliveryResult($set2ndDeliveryResult)
        ;
    }

    /**
     * Get Set2ndDeliveryResult value
     */
    public function getSet2ndDeliveryResult(): ?Set2ndDeliveryReturn
    {
        return $this->Set2ndDeliveryResult;
    }

    /**
     * Set Set2ndDeliveryResult value
     */
    public function setSet2ndDeliveryResult(?Set2ndDeliveryReturn $set2ndDeliveryResult = null): self
    {
        $this->Set2ndDeliveryResult = $set2ndDeliveryResult;

        return $this;
    }
}
