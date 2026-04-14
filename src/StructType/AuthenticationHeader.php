<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthenticationHeader StructType
 * Meta information extracted from the WSDL
 * - type: tns:AuthenticationHeader
 */
#[\AllowDynamicProperties]
class AuthenticationHeader extends AbstractStructBase
{
    /**
     * The UserName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $UserName;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $Password;

    /**
     * Constructor method for AuthenticationHeader
     *
     * @uses AuthenticationHeader::setUserName()
     * @uses AuthenticationHeader::setPassword()
     */
    public function __construct(?string $userName, ?string $password)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
        ;
    }

    /**
     * Get UserName value
     */
    public function getUserName(): string
    {
        return $this->UserName;
    }

    /**
     * Set UserName value
     */
    public function setUserName(?string $userName): self
    {
        // validation for constraint: string
        if (null !== $userName && !\is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), \gettype($userName)), __LINE__);
        }
        $this->UserName = $userName;

        return $this;
    }

    /**
     * Get Password value
     */
    public function getPassword(): string
    {
        return $this->Password;
    }

    /**
     * Set Password value
     */
    public function setPassword(?string $password): self
    {
        // validation for constraint: string
        if (null !== $password && !\is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), \gettype($password)), __LINE__);
        }
        $this->Password = $password;

        return $this;
    }
}
