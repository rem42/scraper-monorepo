<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelDataBase StructType
 */
#[\AllowDynamicProperties]
class LabelDataBase extends AbstractStructBase
{
    /**
     * The ServiceCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ServiceCode = null;
    /**
     * The SSort
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $SSort = null;
    /**
     * The OSort
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $OSort = null;
    /**
     * The OSort2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $OSort2 = null;
    /**
     * The DSort
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $DSort = null;

    /**
     * Constructor method for LabelDataBase
     *
     * @uses LabelDataBase::setServiceCode()
     * @uses LabelDataBase::setSSort()
     * @uses LabelDataBase::setOSort()
     * @uses LabelDataBase::setOSort2()
     * @uses LabelDataBase::setDSort()
     */
    public function __construct(?string $serviceCode = null, ?string $sSort = null, ?string $oSort = null, ?string $oSort2 = null, ?string $dSort = null)
    {
        $this
            ->setServiceCode($serviceCode)
            ->setSSort($sSort)
            ->setOSort($oSort)
            ->setOSort2($oSort2)
            ->setDSort($dSort)
        ;
    }

    /**
     * Get ServiceCode value
     */
    public function getServiceCode(): ?string
    {
        return $this->ServiceCode;
    }

    /**
     * Set ServiceCode value
     */
    public function setServiceCode(?string $serviceCode = null): self
    {
        // validation for constraint: string
        if (null !== $serviceCode && !\is_string($serviceCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serviceCode, true), \gettype($serviceCode)), __LINE__);
        }
        $this->ServiceCode = $serviceCode;

        return $this;
    }

    /**
     * Get SSort value
     */
    public function getSSort(): ?string
    {
        return $this->SSort;
    }

    /**
     * Set SSort value
     */
    public function setSSort(?string $sSort = null): self
    {
        // validation for constraint: string
        if (null !== $sSort && !\is_string($sSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sSort, true), \gettype($sSort)), __LINE__);
        }
        $this->SSort = $sSort;

        return $this;
    }

    /**
     * Get OSort value
     */
    public function getOSort(): ?string
    {
        return $this->OSort;
    }

    /**
     * Set OSort value
     */
    public function setOSort(?string $oSort = null): self
    {
        // validation for constraint: string
        if (null !== $oSort && !\is_string($oSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oSort, true), \gettype($oSort)), __LINE__);
        }
        $this->OSort = $oSort;

        return $this;
    }

    /**
     * Get OSort2 value
     */
    public function getOSort2(): ?string
    {
        return $this->OSort2;
    }

    /**
     * Set OSort2 value
     */
    public function setOSort2(?string $oSort2 = null): self
    {
        // validation for constraint: string
        if (null !== $oSort2 && !\is_string($oSort2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oSort2, true), \gettype($oSort2)), __LINE__);
        }
        $this->OSort2 = $oSort2;

        return $this;
    }

    /**
     * Get DSort value
     */
    public function getDSort(): ?string
    {
        return $this->DSort;
    }

    /**
     * Set DSort value
     */
    public function setDSort(?string $dSort = null): self
    {
        // validation for constraint: string
        if (null !== $dSort && !\is_string($dSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dSort, true), \gettype($dSort)), __LINE__);
        }
        $this->DSort = $dSort;

        return $this;
    }
}
