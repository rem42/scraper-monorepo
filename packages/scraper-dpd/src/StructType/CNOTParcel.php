<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CNOTParcel StructType
 */
#[\AllowDynamicProperties]
class CNOTParcel extends AbstractStructBase
{
    /**
     * The Prio
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $Prio;
    /**
     * The DeliveryRecordPosition
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $DeliveryRecordPosition;
    /**
     * The OnTourAppended
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $OnTourAppended;
    /**
     * The TDVHit
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $TDVHit;
    /**
     * The BcId
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $BcId = null;
    /**
     * The Barcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Barcode = null;
    /**
     * The DeliveryNotificationNumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DeliveryNotificationNumber = null;
    /**
     * The Comment
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Comment = null;
    /**
     * The TimeWindowFrom
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TimeWindowFrom = null;
    /**
     * The TimeWindowTo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TimeWindowTo = null;
    /**
     * The TDVAddressRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $TDVAddressRef = null;
    /**
     * The BcSrc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?int $BcSrc;

    /**
     * Constructor method for CNOTParcel
     *
     * @uses CNOTParcel::setPrio()
     * @uses CNOTParcel::setDeliveryRecordPosition()
     * @uses CNOTParcel::setOnTourAppended()
     * @uses CNOTParcel::setTDVHit()
     * @uses CNOTParcel::setBcId()
     * @uses CNOTParcel::setBarcode()
     * @uses CNOTParcel::setDeliveryNotificationNumber()
     * @uses CNOTParcel::setComment()
     * @uses CNOTParcel::setTimeWindowFrom()
     * @uses CNOTParcel::setTimeWindowTo()
     * @uses CNOTParcel::setTDVAddressRef()
     * @uses CNOTParcel::setBcSrc()
     */
    public function __construct(bool $prio, int $deliveryRecordPosition, bool $onTourAppended, bool $tDVHit, ?string $bcId = null, ?string $barcode = null, ?string $deliveryNotificationNumber = null, ?string $comment = null, ?string $timeWindowFrom = null, ?string $timeWindowTo = null, ?string $tDVAddressRef = null, ?int $bcSrc)
    {
        $this
            ->setPrio($prio)
            ->setDeliveryRecordPosition($deliveryRecordPosition)
            ->setOnTourAppended($onTourAppended)
            ->setTDVHit($tDVHit)
            ->setBcId($bcId)
            ->setBarcode($barcode)
            ->setDeliveryNotificationNumber($deliveryNotificationNumber)
            ->setComment($comment)
            ->setTimeWindowFrom($timeWindowFrom)
            ->setTimeWindowTo($timeWindowTo)
            ->setTDVAddressRef($tDVAddressRef)
            ->setBcSrc($bcSrc)
        ;
    }

    /**
     * Get Prio value
     */
    public function getPrio(): bool
    {
        return $this->Prio;
    }

    /**
     * Set Prio value
     */
    public function setPrio(bool $prio): self
    {
        // validation for constraint: boolean
        if (null !== $prio && !\is_bool($prio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($prio, true), \gettype($prio)), __LINE__);
        }
        $this->Prio = $prio;

        return $this;
    }

    /**
     * Get DeliveryRecordPosition value
     */
    public function getDeliveryRecordPosition(): int
    {
        return $this->DeliveryRecordPosition;
    }

    /**
     * Set DeliveryRecordPosition value
     */
    public function setDeliveryRecordPosition(int $deliveryRecordPosition): self
    {
        // validation for constraint: int
        if (null !== $deliveryRecordPosition && !(\is_int($deliveryRecordPosition) || ctype_digit($deliveryRecordPosition))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($deliveryRecordPosition, true), \gettype($deliveryRecordPosition)), __LINE__);
        }
        $this->DeliveryRecordPosition = $deliveryRecordPosition;

        return $this;
    }

    /**
     * Get OnTourAppended value
     */
    public function getOnTourAppended(): bool
    {
        return $this->OnTourAppended;
    }

    /**
     * Set OnTourAppended value
     */
    public function setOnTourAppended(bool $onTourAppended): self
    {
        // validation for constraint: boolean
        if (null !== $onTourAppended && !\is_bool($onTourAppended)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onTourAppended, true), \gettype($onTourAppended)), __LINE__);
        }
        $this->OnTourAppended = $onTourAppended;

        return $this;
    }

    /**
     * Get TDVHit value
     */
    public function getTDVHit(): bool
    {
        return $this->TDVHit;
    }

    /**
     * Set TDVHit value
     */
    public function setTDVHit(bool $tDVHit): self
    {
        // validation for constraint: boolean
        if (null !== $tDVHit && !\is_bool($tDVHit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($tDVHit, true), \gettype($tDVHit)), __LINE__);
        }
        $this->TDVHit = $tDVHit;

        return $this;
    }

    /**
     * Get BcId value
     */
    public function getBcId(): ?string
    {
        return $this->BcId;
    }

    /**
     * Set BcId value
     */
    public function setBcId(?string $bcId = null): self
    {
        // validation for constraint: string
        if (null !== $bcId && !\is_string($bcId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bcId, true), \gettype($bcId)), __LINE__);
        }
        $this->BcId = $bcId;

        return $this;
    }

    /**
     * Get Barcode value
     */
    public function getBarcode(): ?string
    {
        return $this->Barcode;
    }

    /**
     * Set Barcode value
     */
    public function setBarcode(?string $barcode = null): self
    {
        // validation for constraint: string
        if (null !== $barcode && !\is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcode, true), \gettype($barcode)), __LINE__);
        }
        $this->Barcode = $barcode;

        return $this;
    }

    /**
     * Get DeliveryNotificationNumber value
     */
    public function getDeliveryNotificationNumber(): ?string
    {
        return $this->DeliveryNotificationNumber;
    }

    /**
     * Set DeliveryNotificationNumber value
     */
    public function setDeliveryNotificationNumber(?string $deliveryNotificationNumber = null): self
    {
        // validation for constraint: string
        if (null !== $deliveryNotificationNumber && !\is_string($deliveryNotificationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deliveryNotificationNumber, true), \gettype($deliveryNotificationNumber)), __LINE__);
        }
        $this->DeliveryNotificationNumber = $deliveryNotificationNumber;

        return $this;
    }

    /**
     * Get Comment value
     */
    public function getComment(): ?string
    {
        return $this->Comment;
    }

    /**
     * Set Comment value
     */
    public function setComment(?string $comment = null): self
    {
        // validation for constraint: string
        if (null !== $comment && !\is_string($comment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($comment, true), \gettype($comment)), __LINE__);
        }
        $this->Comment = $comment;

        return $this;
    }

    /**
     * Get TimeWindowFrom value
     */
    public function getTimeWindowFrom(): ?string
    {
        return $this->TimeWindowFrom;
    }

    /**
     * Set TimeWindowFrom value
     */
    public function setTimeWindowFrom(?string $timeWindowFrom = null): self
    {
        // validation for constraint: string
        if (null !== $timeWindowFrom && !\is_string($timeWindowFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeWindowFrom, true), \gettype($timeWindowFrom)), __LINE__);
        }
        $this->TimeWindowFrom = $timeWindowFrom;

        return $this;
    }

    /**
     * Get TimeWindowTo value
     */
    public function getTimeWindowTo(): ?string
    {
        return $this->TimeWindowTo;
    }

    /**
     * Set TimeWindowTo value
     */
    public function setTimeWindowTo(?string $timeWindowTo = null): self
    {
        // validation for constraint: string
        if (null !== $timeWindowTo && !\is_string($timeWindowTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeWindowTo, true), \gettype($timeWindowTo)), __LINE__);
        }
        $this->TimeWindowTo = $timeWindowTo;

        return $this;
    }

    /**
     * Get TDVAddressRef value
     */
    public function getTDVAddressRef(): ?string
    {
        return $this->TDVAddressRef;
    }

    /**
     * Set TDVAddressRef value
     */
    public function setTDVAddressRef(?string $tDVAddressRef = null): self
    {
        // validation for constraint: string
        if (null !== $tDVAddressRef && !\is_string($tDVAddressRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tDVAddressRef, true), \gettype($tDVAddressRef)), __LINE__);
        }
        $this->TDVAddressRef = $tDVAddressRef;

        return $this;
    }

    /**
     * Get BcSrc value
     */
    public function getBcSrc(): int
    {
        return $this->BcSrc;
    }

    /**
     * Set BcSrc value
     */
    public function setBcSrc(?int $bcSrc): self
    {
        // validation for constraint: int
        if (null !== $bcSrc && !(\is_int($bcSrc) || ctype_digit($bcSrc))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bcSrc, true), \gettype($bcSrc)), __LINE__);
        }
        $this->BcSrc = $bcSrc;

        return $this;
    }
}
