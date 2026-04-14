<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for StdServices StructType
 */
#[\AllowDynamicProperties]
class StdServices extends ContactServices
{
    /**
     * The extraInsurance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ExtraInsurance $extraInsurance = null;
    /**
     * The parcelshop
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ParcelShop $parcelshop = null;
    /**
     * The reverse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Reverse $reverse = null;
    /**
     * The reverseInverseReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ReverseInverseReturn $reverseInverseReturn = null;
    /**
     * The reversInverseBcReturn
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ReverseInverseReturnBc $reversInverseBcReturn = null;
    /**
     * The autoConsolidation
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?AutoConsolidation $autoConsolidation = null;
    /**
     * The pickupAtCustomer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?PickupData $pickupAtCustomer = null;
    /**
     * The bic3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Bic3 $bic3 = null;
    /**
     * The sameday
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Sameday $sameday = null;
    /**
     * The marketing
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Marketing $marketing = null;

    /**
     * Constructor method for StdServices
     *
     * @uses StdServices::setExtraInsurance()
     * @uses StdServices::setParcelshop()
     * @uses StdServices::setReverse()
     * @uses StdServices::setReverseInverseReturn()
     * @uses StdServices::setReversInverseBcReturn()
     * @uses StdServices::setAutoConsolidation()
     * @uses StdServices::setPickupAtCustomer()
     * @uses StdServices::setBic3()
     * @uses StdServices::setSameday()
     * @uses StdServices::setMarketing()
     */
    public function __construct(?ExtraInsurance $extraInsurance = null, ?ParcelShop $parcelshop = null, ?Reverse $reverse = null, ?ReverseInverseReturn $reverseInverseReturn = null, ?ReverseInverseReturnBc $reversInverseBcReturn = null, ?AutoConsolidation $autoConsolidation = null, ?PickupData $pickupAtCustomer = null, ?Bic3 $bic3 = null, ?Sameday $sameday = null, ?Marketing $marketing = null)
    {
        $this
            ->setExtraInsurance($extraInsurance)
            ->setParcelshop($parcelshop)
            ->setReverse($reverse)
            ->setReverseInverseReturn($reverseInverseReturn)
            ->setReversInverseBcReturn($reversInverseBcReturn)
            ->setAutoConsolidation($autoConsolidation)
            ->setPickupAtCustomer($pickupAtCustomer)
            ->setBic3($bic3)
            ->setSameday($sameday)
            ->setMarketing($marketing)
        ;
    }

    /**
     * Get extraInsurance value
     */
    public function getExtraInsurance(): ?ExtraInsurance
    {
        return $this->extraInsurance;
    }

    /**
     * Set extraInsurance value
     */
    public function setExtraInsurance(?ExtraInsurance $extraInsurance = null): self
    {
        $this->extraInsurance = $extraInsurance;

        return $this;
    }

    /**
     * Get parcelshop value
     */
    public function getParcelshop(): ?ParcelShop
    {
        return $this->parcelshop;
    }

    /**
     * Set parcelshop value
     */
    public function setParcelshop(?ParcelShop $parcelshop = null): self
    {
        $this->parcelshop = $parcelshop;

        return $this;
    }

    /**
     * Get reverse value
     */
    public function getReverse(): ?Reverse
    {
        return $this->reverse;
    }

    /**
     * Set reverse value
     */
    public function setReverse(?Reverse $reverse = null): self
    {
        $this->reverse = $reverse;

        return $this;
    }

    /**
     * Get reverseInverseReturn value
     */
    public function getReverseInverseReturn(): ?ReverseInverseReturn
    {
        return $this->reverseInverseReturn;
    }

    /**
     * Set reverseInverseReturn value
     */
    public function setReverseInverseReturn(?ReverseInverseReturn $reverseInverseReturn = null): self
    {
        $this->reverseInverseReturn = $reverseInverseReturn;

        return $this;
    }

    /**
     * Get reversInverseBcReturn value
     */
    public function getReversInverseBcReturn(): ?ReverseInverseReturnBc
    {
        return $this->reversInverseBcReturn;
    }

    /**
     * Set reversInverseBcReturn value
     */
    public function setReversInverseBcReturn(?ReverseInverseReturnBc $reversInverseBcReturn = null): self
    {
        $this->reversInverseBcReturn = $reversInverseBcReturn;

        return $this;
    }

    /**
     * Get autoConsolidation value
     */
    public function getAutoConsolidation(): ?AutoConsolidation
    {
        return $this->autoConsolidation;
    }

    /**
     * Set autoConsolidation value
     */
    public function setAutoConsolidation(?AutoConsolidation $autoConsolidation = null): self
    {
        $this->autoConsolidation = $autoConsolidation;

        return $this;
    }

    /**
     * Get pickupAtCustomer value
     */
    public function getPickupAtCustomer(): ?PickupData
    {
        return $this->pickupAtCustomer;
    }

    /**
     * Set pickupAtCustomer value
     */
    public function setPickupAtCustomer(?PickupData $pickupAtCustomer = null): self
    {
        $this->pickupAtCustomer = $pickupAtCustomer;

        return $this;
    }

    /**
     * Get bic3 value
     */
    public function getBic3(): ?Bic3
    {
        return $this->bic3;
    }

    /**
     * Set bic3 value
     */
    public function setBic3(?Bic3 $bic3 = null): self
    {
        $this->bic3 = $bic3;

        return $this;
    }

    /**
     * Get sameday value
     */
    public function getSameday(): ?Sameday
    {
        return $this->sameday;
    }

    /**
     * Set sameday value
     */
    public function setSameday(?Sameday $sameday = null): self
    {
        $this->sameday = $sameday;

        return $this;
    }

    /**
     * Get marketing value
     */
    public function getMarketing(): ?Marketing
    {
        return $this->marketing;
    }

    /**
     * Set marketing value
     */
    public function setMarketing(?Marketing $marketing = null): self
    {
        $this->marketing = $marketing;

        return $this;
    }
}
