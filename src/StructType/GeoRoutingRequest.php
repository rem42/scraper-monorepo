<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for GeoRoutingRequest StructType
 */
#[\AllowDynamicProperties]
class GeoRoutingRequest extends GeoRoutingBaseRequest
{
    /**
     * The serviceCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $serviceCode = null;

    /**
     * Constructor method for GeoRoutingRequest
     *
     * @uses GeoRoutingRequest::setServiceCode()
     */
    public function __construct(?string $serviceCode = null)
    {
        $this
            ->setServiceCode($serviceCode)
        ;
    }

    /**
     * Get serviceCode value
     */
    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }

    /**
     * Set serviceCode value
     */
    public function setServiceCode(?string $serviceCode = null): self
    {
        // validation for constraint: string
        if (null !== $serviceCode && !\is_string($serviceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceCode, true), \gettype($serviceCode)), __LINE__);
        }
        $this->serviceCode = $serviceCode;

        return $this;
    }
}
