<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ReverseInverseServices StructType
 */
#[\AllowDynamicProperties]
class ReverseInverseServices extends ServiceBaseList
{
    /**
     * The extraInsurance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ExtraInsurance $extraInsurance = null;
    /**
     * The contact
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Contact $contact = null;

    /**
     * Constructor method for ReverseInverseServices
     *
     * @uses ReverseInverseServices::setExtraInsurance()
     * @uses ReverseInverseServices::setContact()
     */
    public function __construct(?ExtraInsurance $extraInsurance = null, ?Contact $contact = null)
    {
        $this
            ->setExtraInsurance($extraInsurance)
            ->setContact($contact)
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
     * Get contact value
     */
    public function getContact(): ?Contact
    {
        return $this->contact;
    }

    /**
     * Set contact value
     */
    public function setContact(?Contact $contact = null): self
    {
        $this->contact = $contact;

        return $this;
    }
}
