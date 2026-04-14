<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickupPointRequest StructType
 */
#[\AllowDynamicProperties]
class GetPickupPointRequest extends AbstractStructBase
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
     * The PckCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?string $PckCode;

    /**
     * Constructor method for GetPickupPointRequest
     *
     * @uses GetPickupPointRequest::setSecurityID()
     * @uses GetPickupPointRequest::setPckCode()
     */
    public function __construct(?IdentificationObject $securityID, ?string $pckCode)
    {
        $this
            ->setSecurityID($securityID)
            ->setPckCode($pckCode)
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
     * Get PckCode value
     */
    public function getPckCode(): string
    {
        return $this->PckCode;
    }

    /**
     * Set PckCode value
     */
    public function setPckCode(?string $pckCode): self
    {
        // validation for constraint: string
        if (null !== $pckCode && !\is_string($pckCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckCode, true), \gettype($pckCode)), __LINE__);
        }
        $this->PckCode = $pckCode;

        return $this;
    }
}
