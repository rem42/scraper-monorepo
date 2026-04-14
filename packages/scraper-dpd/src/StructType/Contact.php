<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for Contact StructType
 */
#[\AllowDynamicProperties]
class Contact extends DefaultService
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $type;
    /**
     * The sms
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $sms = null;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $email = null;
    /**
     * The autoText
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $autoText = null;
    /**
     * The secureService
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?Secure $secureService = null;

    /**
     * Constructor method for Contact
     *
     * @uses Contact::setType()
     * @uses Contact::setSms()
     * @uses Contact::setEmail()
     * @uses Contact::setAutoText()
     * @uses Contact::setSecureService()
     */
    public function __construct(string $type, ?string $sms = null, ?string $email = null, ?string $autoText = null, ?Secure $secureService = null)
    {
        $this
            ->setType($type)
            ->setSms($sms)
            ->setEmail($email)
            ->setAutoText($autoText)
            ->setSecureService($secureService)
        ;
    }

    /**
     * Get type value
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set type value
     *
     * @uses \Scraper\ScraperDPD\EnumType\EtypeContact::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\EtypeContact::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\EtypeContact::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\EtypeContact', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\EtypeContact::getValidValues())), __LINE__);
        }
        $this->type = $type;

        return $this;
    }

    /**
     * Get sms value
     */
    public function getSms(): ?string
    {
        return $this->sms;
    }

    /**
     * Set sms value
     */
    public function setSms(?string $sms = null): self
    {
        // validation for constraint: string
        if (null !== $sms && !\is_string($sms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sms, true), \gettype($sms)), __LINE__);
        }
        $this->sms = $sms;

        return $this;
    }

    /**
     * Get email value
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Set email value
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (null !== $email && !\is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), \gettype($email)), __LINE__);
        }
        $this->email = $email;

        return $this;
    }

    /**
     * Get autoText value
     */
    public function getAutoText(): ?string
    {
        return $this->autoText;
    }

    /**
     * Set autoText value
     */
    public function setAutoText(?string $autoText = null): self
    {
        // validation for constraint: string
        if (null !== $autoText && !\is_string($autoText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autoText, true), \gettype($autoText)), __LINE__);
        }
        $this->autoText = $autoText;

        return $this;
    }

    /**
     * Get secureService value
     */
    public function getSecureService(): ?Secure
    {
        return $this->secureService;
    }

    /**
     * Set secureService value
     */
    public function setSecureService(?Secure $secureService = null): self
    {
        $this->secureService = $secureService;

        return $this;
    }
}
