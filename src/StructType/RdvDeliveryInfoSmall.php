<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RdvDeliveryInfoSmall StructType
 */
#[\AllowDynamicProperties]
class RdvDeliveryInfoSmall extends AbstractStructBase
{
    /**
     * The ContactName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ContactName = null;
    /**
     * The Digicode1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Digicode1 = null;
    /**
     * The Digicode2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Digicode2 = null;
    /**
     * The IntercomID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $IntercomID = null;
    /**
     * The Remark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Remark = null;

    /**
     * Constructor method for RdvDeliveryInfoSmall
     *
     * @uses RdvDeliveryInfoSmall::setContactName()
     * @uses RdvDeliveryInfoSmall::setDigicode1()
     * @uses RdvDeliveryInfoSmall::setDigicode2()
     * @uses RdvDeliveryInfoSmall::setIntercomID()
     * @uses RdvDeliveryInfoSmall::setRemark()
     */
    public function __construct(?string $contactName = null, ?string $digicode1 = null, ?string $digicode2 = null, ?string $intercomID = null, ?string $remark = null)
    {
        $this
            ->setContactName($contactName)
            ->setDigicode1($digicode1)
            ->setDigicode2($digicode2)
            ->setIntercomID($intercomID)
            ->setRemark($remark)
        ;
    }

    /**
     * Get ContactName value
     */
    public function getContactName(): ?string
    {
        return $this->ContactName;
    }

    /**
     * Set ContactName value
     */
    public function setContactName(?string $contactName = null): self
    {
        // validation for constraint: string
        if (null !== $contactName && !\is_string($contactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactName, true), \gettype($contactName)), __LINE__);
        }
        $this->ContactName = $contactName;

        return $this;
    }

    /**
     * Get Digicode1 value
     */
    public function getDigicode1(): ?string
    {
        return $this->Digicode1;
    }

    /**
     * Set Digicode1 value
     */
    public function setDigicode1(?string $digicode1 = null): self
    {
        // validation for constraint: string
        if (null !== $digicode1 && !\is_string($digicode1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($digicode1, true), \gettype($digicode1)), __LINE__);
        }
        $this->Digicode1 = $digicode1;

        return $this;
    }

    /**
     * Get Digicode2 value
     */
    public function getDigicode2(): ?string
    {
        return $this->Digicode2;
    }

    /**
     * Set Digicode2 value
     */
    public function setDigicode2(?string $digicode2 = null): self
    {
        // validation for constraint: string
        if (null !== $digicode2 && !\is_string($digicode2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($digicode2, true), \gettype($digicode2)), __LINE__);
        }
        $this->Digicode2 = $digicode2;

        return $this;
    }

    /**
     * Get IntercomID value
     */
    public function getIntercomID(): ?string
    {
        return $this->IntercomID;
    }

    /**
     * Set IntercomID value
     */
    public function setIntercomID(?string $intercomID = null): self
    {
        // validation for constraint: string
        if (null !== $intercomID && !\is_string($intercomID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($intercomID, true), \gettype($intercomID)), __LINE__);
        }
        $this->IntercomID = $intercomID;

        return $this;
    }

    /**
     * Get Remark value
     */
    public function getRemark(): ?string
    {
        return $this->Remark;
    }

    /**
     * Set Remark value
     */
    public function setRemark(?string $remark = null): self
    {
        // validation for constraint: string
        if (null !== $remark && !\is_string($remark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark, true), \gettype($remark)), __LINE__);
        }
        $this->Remark = $remark;

        return $this;
    }
}
