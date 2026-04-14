<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ShopAddress StructType
 */
#[\AllowDynamicProperties]
class ShopAddress extends Address
{
    /**
     * The shopid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $shopid = null;

    /**
     * Constructor method for ShopAddress
     *
     * @uses ShopAddress::setShopid()
     */
    public function __construct(?string $shopid = null)
    {
        $this
            ->setShopid($shopid)
        ;
    }

    /**
     * Get shopid value
     */
    public function getShopid(): ?string
    {
        return $this->shopid;
    }

    /**
     * Set shopid value
     */
    public function setShopid(?string $shopid = null): self
    {
        // validation for constraint: string
        if (null !== $shopid && !\is_string($shopid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shopid, true), \gettype($shopid)), __LINE__);
        }
        $this->shopid = $shopid;

        return $this;
    }
}
