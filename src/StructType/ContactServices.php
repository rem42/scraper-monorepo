<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ContactServices StructType
 */
#[\AllowDynamicProperties]
class ContactServices extends CreateServicesBase
{
    /**
     * The contact
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Contact $contact = null;

    /**
     * Constructor method for ContactServices
     *
     * @uses ContactServices::setContact()
     */
    public function __construct(?Contact $contact = null)
    {
        $this
            ->setContact($contact)
        ;
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
