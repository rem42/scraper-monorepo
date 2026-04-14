<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for LabelDataPn StructType
 */
#[\AllowDynamicProperties]
class LabelDataPn extends LabelDataBase
{
    /**
     * The OSortInverse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $OSortInverse;
    /**
     * The OSort2Inverse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $OSort2Inverse;
    /**
     * The DSortInverse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $DSortInverse;
    /**
     * The IsShop
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $IsShop;
    /**
     * The ReverseHint
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $ReverseHint;
    /**
     * The DutiableHint
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DutiableHint = null;
    /**
     * The Hint
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Hint = null;
    /**
     * The Routingtext
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Routingtext = null;
    /**
     * The Servicetext
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Servicetext = null;
    /**
     * The ServiceMark
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ServiceMark = null;
    /**
     * The ReceiverCenterLine
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ReceiverCenterLine = null;

    /**
     * Constructor method for LabelDataPn
     *
     * @uses LabelDataPn::setOSortInverse()
     * @uses LabelDataPn::setOSort2Inverse()
     * @uses LabelDataPn::setDSortInverse()
     * @uses LabelDataPn::setIsShop()
     * @uses LabelDataPn::setReverseHint()
     * @uses LabelDataPn::setDutiableHint()
     * @uses LabelDataPn::setHint()
     * @uses LabelDataPn::setRoutingtext()
     * @uses LabelDataPn::setServicetext()
     * @uses LabelDataPn::setServiceMark()
     * @uses LabelDataPn::setReceiverCenterLine()
     */
    public function __construct(bool $oSortInverse, bool $oSort2Inverse, bool $dSortInverse, bool $isShop, bool $reverseHint, ?string $dutiableHint = null, ?string $hint = null, ?string $routingtext = null, ?string $servicetext = null, ?string $serviceMark = null, ?string $receiverCenterLine = null)
    {
        $this
            ->setOSortInverse($oSortInverse)
            ->setOSort2Inverse($oSort2Inverse)
            ->setDSortInverse($dSortInverse)
            ->setIsShop($isShop)
            ->setReverseHint($reverseHint)
            ->setDutiableHint($dutiableHint)
            ->setHint($hint)
            ->setRoutingtext($routingtext)
            ->setServicetext($servicetext)
            ->setServiceMark($serviceMark)
            ->setReceiverCenterLine($receiverCenterLine)
        ;
    }

    /**
     * Get OSortInverse value
     */
    public function getOSortInverse(): bool
    {
        return $this->OSortInverse;
    }

    /**
     * Set OSortInverse value
     */
    public function setOSortInverse(bool $oSortInverse): self
    {
        // validation for constraint: boolean
        if (null !== $oSortInverse && !\is_bool($oSortInverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oSortInverse, true), \gettype($oSortInverse)), __LINE__);
        }
        $this->OSortInverse = $oSortInverse;

        return $this;
    }

    /**
     * Get OSort2Inverse value
     */
    public function getOSort2Inverse(): bool
    {
        return $this->OSort2Inverse;
    }

    /**
     * Set OSort2Inverse value
     */
    public function setOSort2Inverse(bool $oSort2Inverse): self
    {
        // validation for constraint: boolean
        if (null !== $oSort2Inverse && !\is_bool($oSort2Inverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oSort2Inverse, true), \gettype($oSort2Inverse)), __LINE__);
        }
        $this->OSort2Inverse = $oSort2Inverse;

        return $this;
    }

    /**
     * Get DSortInverse value
     */
    public function getDSortInverse(): bool
    {
        return $this->DSortInverse;
    }

    /**
     * Set DSortInverse value
     */
    public function setDSortInverse(bool $dSortInverse): self
    {
        // validation for constraint: boolean
        if (null !== $dSortInverse && !\is_bool($dSortInverse)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dSortInverse, true), \gettype($dSortInverse)), __LINE__);
        }
        $this->DSortInverse = $dSortInverse;

        return $this;
    }

    /**
     * Get IsShop value
     */
    public function getIsShop(): bool
    {
        return $this->IsShop;
    }

    /**
     * Set IsShop value
     */
    public function setIsShop(bool $isShop): self
    {
        // validation for constraint: boolean
        if (null !== $isShop && !\is_bool($isShop)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShop, true), \gettype($isShop)), __LINE__);
        }
        $this->IsShop = $isShop;

        return $this;
    }

    /**
     * Get ReverseHint value
     */
    public function getReverseHint(): bool
    {
        return $this->ReverseHint;
    }

    /**
     * Set ReverseHint value
     */
    public function setReverseHint(bool $reverseHint): self
    {
        // validation for constraint: boolean
        if (null !== $reverseHint && !\is_bool($reverseHint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reverseHint, true), \gettype($reverseHint)), __LINE__);
        }
        $this->ReverseHint = $reverseHint;

        return $this;
    }

    /**
     * Get DutiableHint value
     */
    public function getDutiableHint(): ?string
    {
        return $this->DutiableHint;
    }

    /**
     * Set DutiableHint value
     */
    public function setDutiableHint(?string $dutiableHint = null): self
    {
        // validation for constraint: string
        if (null !== $dutiableHint && !\is_string($dutiableHint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dutiableHint, true), \gettype($dutiableHint)), __LINE__);
        }
        $this->DutiableHint = $dutiableHint;

        return $this;
    }

    /**
     * Get Hint value
     */
    public function getHint(): ?string
    {
        return $this->Hint;
    }

    /**
     * Set Hint value
     */
    public function setHint(?string $hint = null): self
    {
        // validation for constraint: string
        if (null !== $hint && !\is_string($hint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hint, true), \gettype($hint)), __LINE__);
        }
        $this->Hint = $hint;

        return $this;
    }

    /**
     * Get Routingtext value
     */
    public function getRoutingtext(): ?string
    {
        return $this->Routingtext;
    }

    /**
     * Set Routingtext value
     */
    public function setRoutingtext(?string $routingtext = null): self
    {
        // validation for constraint: string
        if (null !== $routingtext && !\is_string($routingtext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routingtext, true), \gettype($routingtext)), __LINE__);
        }
        $this->Routingtext = $routingtext;

        return $this;
    }

    /**
     * Get Servicetext value
     */
    public function getServicetext(): ?string
    {
        return $this->Servicetext;
    }

    /**
     * Set Servicetext value
     */
    public function setServicetext(?string $servicetext = null): self
    {
        // validation for constraint: string
        if (null !== $servicetext && !\is_string($servicetext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($servicetext, true), \gettype($servicetext)), __LINE__);
        }
        $this->Servicetext = $servicetext;

        return $this;
    }

    /**
     * Get ServiceMark value
     */
    public function getServiceMark(): ?string
    {
        return $this->ServiceMark;
    }

    /**
     * Set ServiceMark value
     */
    public function setServiceMark(?string $serviceMark = null): self
    {
        // validation for constraint: string
        if (null !== $serviceMark && !\is_string($serviceMark)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceMark, true), \gettype($serviceMark)), __LINE__);
        }
        $this->ServiceMark = $serviceMark;

        return $this;
    }

    /**
     * Get ReceiverCenterLine value
     */
    public function getReceiverCenterLine(): ?string
    {
        return $this->ReceiverCenterLine;
    }

    /**
     * Set ReceiverCenterLine value
     */
    public function setReceiverCenterLine(?string $receiverCenterLine = null): self
    {
        // validation for constraint: string
        if (null !== $receiverCenterLine && !\is_string($receiverCenterLine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiverCenterLine, true), \gettype($receiverCenterLine)), __LINE__);
        }
        $this->ReceiverCenterLine = $receiverCenterLine;

        return $this;
    }
}
