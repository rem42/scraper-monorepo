<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateRdvShipmentData StructType
 */
#[\AllowDynamicProperties]
class UpdateRdvShipmentData extends AbstractStructBase
{
    /**
     * The Sin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Sin = null;
    /**
     * The Receiver_EmailAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Receiver_EmailAddress = null;
    /**
     * The User
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $User = null;
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?UpdateRdvShipmentDataRequest $request = null;

    /**
     * Constructor method for UpdateRdvShipmentData
     *
     * @uses UpdateRdvShipmentData::setSin()
     * @uses UpdateRdvShipmentData::setReceiver_EmailAddress()
     * @uses UpdateRdvShipmentData::setUser()
     * @uses UpdateRdvShipmentData::setRequest()
     */
    public function __construct(?string $sin = null, ?string $receiver_EmailAddress = null, ?string $user = null, ?UpdateRdvShipmentDataRequest $request = null)
    {
        $this
            ->setSin($sin)
            ->setReceiver_EmailAddress($receiver_EmailAddress)
            ->setUser($user)
            ->setRequest($request)
        ;
    }

    /**
     * Get Sin value
     */
    public function getSin(): ?string
    {
        return $this->Sin;
    }

    /**
     * Set Sin value
     */
    public function setSin(?string $sin = null): self
    {
        // validation for constraint: string
        if (null !== $sin && !\is_string($sin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sin, true), \gettype($sin)), __LINE__);
        }
        $this->Sin = $sin;

        return $this;
    }

    /**
     * Get Receiver_EmailAddress value
     */
    public function getReceiver_EmailAddress(): ?string
    {
        return $this->Receiver_EmailAddress;
    }

    /**
     * Set Receiver_EmailAddress value
     */
    public function setReceiver_EmailAddress(?string $receiver_EmailAddress = null): self
    {
        // validation for constraint: string
        if (null !== $receiver_EmailAddress && !\is_string($receiver_EmailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiver_EmailAddress, true), \gettype($receiver_EmailAddress)), __LINE__);
        }
        $this->Receiver_EmailAddress = $receiver_EmailAddress;

        return $this;
    }

    /**
     * Get User value
     */
    public function getUser(): ?string
    {
        return $this->User;
    }

    /**
     * Set User value
     */
    public function setUser(?string $user = null): self
    {
        // validation for constraint: string
        if (null !== $user && !\is_string($user)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($user, true), \gettype($user)), __LINE__);
        }
        $this->User = $user;

        return $this;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?UpdateRdvShipmentDataRequest
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?UpdateRdvShipmentDataRequest $request = null): self
    {
        $this->request = $request;

        return $this;
    }
}
