<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for CollectionRequestServices StructType
 */
#[\AllowDynamicProperties]
class CollectionRequestServices extends CreateServicesBase
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
    protected ?ContactCollectionRequest $contact = null;
    /**
     * The marketing
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Marketing $marketing = null;

    /**
     * Constructor method for CollectionRequestServices
     *
     * @uses CollectionRequestServices::setExtraInsurance()
     * @uses CollectionRequestServices::setContact()
     * @uses CollectionRequestServices::setMarketing()
     */
    public function __construct(?ExtraInsurance $extraInsurance = null, ?ContactCollectionRequest $contact = null, ?Marketing $marketing = null)
    {
        $this
            ->setExtraInsurance($extraInsurance)
            ->setContact($contact)
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
     * Get contact value
     */
    public function getContact(): ?ContactCollectionRequest
    {
        return $this->contact;
    }

    /**
     * Set contact value
     */
    public function setContact(?ContactCollectionRequest $contact = null): self
    {
        $this->contact = $contact;

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
