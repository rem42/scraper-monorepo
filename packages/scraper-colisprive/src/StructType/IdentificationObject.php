<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdentificationObject StructType
 */
#[\AllowDynamicProperties]
class IdentificationObject extends AbstractStructBase
{
    /**
     * The CPCustoID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $CPCustoID;
    /**
     * The AccountID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $AccountID;

    /**
     * Constructor method for IdentificationObject
     *
     * @uses IdentificationObject::setCPCustoID()
     * @uses IdentificationObject::setAccountID()
     */
    public function __construct(?string $cPCustoID, ?string $accountID)
    {
        $this
            ->setCPCustoID($cPCustoID)
            ->setAccountID($accountID)
        ;
    }

    /**
     * Get CPCustoID value
     */
    public function getCPCustoID(): string
    {
        return $this->CPCustoID;
    }

    /**
     * Set CPCustoID value
     */
    public function setCPCustoID(?string $cPCustoID): self
    {
        // validation for constraint: string
        if (null !== $cPCustoID && !\is_string($cPCustoID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPCustoID, true), \gettype($cPCustoID)), __LINE__);
        }
        $this->CPCustoID = $cPCustoID;

        return $this;
    }

    /**
     * Get AccountID value
     */
    public function getAccountID(): string
    {
        return $this->AccountID;
    }

    /**
     * Set AccountID value
     */
    public function setAccountID(?string $accountID): self
    {
        // validation for constraint: string
        if (null !== $accountID && !\is_string($accountID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountID, true), \gettype($accountID)), __LINE__);
        }
        $this->AccountID = $accountID;

        return $this;
    }
}
