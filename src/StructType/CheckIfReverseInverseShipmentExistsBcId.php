<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckIfReverseInverseShipmentExistsBcId StructType
 */
#[\AllowDynamicProperties]
class CheckIfReverseInverseShipmentExistsBcId extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?CheckIfReverseInverseShipmentExistsBcIdRequest $request = null;

    /**
     * Constructor method for CheckIfReverseInverseShipmentExistsBcId
     *
     * @uses CheckIfReverseInverseShipmentExistsBcId::setRequest()
     */
    public function __construct(?CheckIfReverseInverseShipmentExistsBcIdRequest $request = null)
    {
        $this
            ->setRequest($request)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?CheckIfReverseInverseShipmentExistsBcIdRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?CheckIfReverseInverseShipmentExistsBcIdRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
