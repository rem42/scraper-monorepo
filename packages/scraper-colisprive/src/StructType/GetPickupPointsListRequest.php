<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickupPointsListRequest StructType
 */
#[\AllowDynamicProperties]
class GetPickupPointsListRequest extends AbstractStructBase
{
    /**
     * The SecurityID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?IdentificationObject $SecurityID;
    /**
     * The CPPclCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $CPPclCode;
    /**
     * The CsgZC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $CsgZC;

    /**
     * Constructor method for GetPickupPointsListRequest
     *
     * @uses GetPickupPointsListRequest::setSecurityID()
     * @uses GetPickupPointsListRequest::setCPPclCode()
     * @uses GetPickupPointsListRequest::setCsgZC()
     */
    public function __construct(?IdentificationObject $securityID, ?string $cPPclCode, ?string $csgZC)
    {
        $this
            ->setSecurityID($securityID)
            ->setCPPclCode($cPPclCode)
            ->setCsgZC($csgZC)
        ;
    }

    /**
     * Get SecurityID value
     */
    public function getSecurityID(): IdentificationObject
    {
        return $this->SecurityID;
    }

    /**
     * Set SecurityID value
     */
    public function setSecurityID(?IdentificationObject $securityID): self
    {
        $this->SecurityID = $securityID;

        return $this;
    }

    /**
     * Get CPPclCode value
     */
    public function getCPPclCode(): string
    {
        return $this->CPPclCode;
    }

    /**
     * Set CPPclCode value
     */
    public function setCPPclCode(?string $cPPclCode): self
    {
        // validation for constraint: string
        if (null !== $cPPclCode && !\is_string($cPPclCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPPclCode, true), \gettype($cPPclCode)), __LINE__);
        }
        $this->CPPclCode = $cPPclCode;

        return $this;
    }

    /**
     * Get CsgZC value
     */
    public function getCsgZC(): string
    {
        return $this->CsgZC;
    }

    /**
     * Set CsgZC value
     */
    public function setCsgZC(?string $csgZC): self
    {
        // validation for constraint: string
        if (null !== $csgZC && !\is_string($csgZC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($csgZC, true), \gettype($csgZC)), __LINE__);
        }
        $this->CsgZC = $csgZC;

        return $this;
    }
}
