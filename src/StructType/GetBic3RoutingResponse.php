<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBic3RoutingResponse StructType
 */
#[\AllowDynamicProperties]
class GetBic3RoutingResponse extends AbstractStructBase
{
    /**
     * The bic3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $bic3;
    /**
     * The GetBic3RoutingResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetBic3RoutingResponse $GetBic3RoutingResult = null;
    /**
     * The route
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GeoRouting $route = null;

    /**
     * Constructor method for GetBic3RoutingResponse
     *
     * @uses GetBic3RoutingResponse::setBic3()
     * @uses GetBic3RoutingResponse::setGetBic3RoutingResult()
     * @uses GetBic3RoutingResponse::setRoute()
     */
    public function __construct(int $bic3, ?self $getBic3RoutingResult = null, ?GeoRouting $route = null)
    {
        $this
            ->setBic3($bic3)
            ->setGetBic3RoutingResult($getBic3RoutingResult)
            ->setRoute($route)
        ;
    }

    /**
     * Get bic3 value
     */
    public function getBic3(): int
    {
        return $this->bic3;
    }

    /**
     * Set bic3 value
     */
    public function setBic3(int $bic3): self
    {
        // validation for constraint: int
        if (null !== $bic3 && !(\is_int($bic3) || ctype_digit($bic3))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bic3, true), \gettype($bic3)), __LINE__);
        }
        $this->bic3 = $bic3;

        return $this;
    }

    /**
     * Get GetBic3RoutingResult value
     */
    public function getGetBic3RoutingResult(): ?self
    {
        return $this->GetBic3RoutingResult;
    }

    /**
     * Set GetBic3RoutingResult value
     */
    public function setGetBic3RoutingResult(?self $getBic3RoutingResult = null): self
    {
        $this->GetBic3RoutingResult = $getBic3RoutingResult;

        return $this;
    }

    /**
     * Get route value
     */
    public function getRoute(): ?GeoRouting
    {
        return $this->route;
    }

    /**
     * Set route value
     */
    public function setRoute(?GeoRouting $route = null): self
    {
        $this->route = $route;

        return $this;
    }
}
