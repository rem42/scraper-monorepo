<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ParcelShop StructType
 */
#[\AllowDynamicProperties]
class ParcelShop extends DefaultService
{
    /**
     * The shopaddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ShopAddress $shopaddress = null;

    /**
     * Constructor method for ParcelShop
     *
     * @uses ParcelShop::setShopaddress()
     */
    public function __construct(?ShopAddress $shopaddress = null)
    {
        $this
            ->setShopaddress($shopaddress)
        ;
    }

    /**
     * Get shopaddress value
     */
    public function getShopaddress(): ?ShopAddress
    {
        return $this->shopaddress;
    }

    /**
     * Set shopaddress value
     */
    public function setShopaddress(?ShopAddress $shopaddress = null): self
    {
        $this->shopaddress = $shopaddress;

        return $this;
    }
}
