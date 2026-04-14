<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerService StructType
 */
#[\AllowDynamicProperties]
class CustomerService extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $Type;
    /**
     * The Export
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $Export;
    /**
     * The LimitType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $LimitType;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Name = null;
    /**
     * The Attribute
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?int $Attribute;
    /**
     * The Mode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?int $Mode;
    /**
     * The LimitMin
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?float $LimitMin;
    /**
     * The LimitMax
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?float $LimitMax;

    /**
     * Constructor method for CustomerService
     *
     * @uses CustomerService::setType()
     * @uses CustomerService::setExport()
     * @uses CustomerService::setLimitType()
     * @uses CustomerService::setName()
     * @uses CustomerService::setAttribute()
     * @uses CustomerService::setMode()
     * @uses CustomerService::setLimitMin()
     * @uses CustomerService::setLimitMax()
     */
    public function __construct(int $type, string $export, string $limitType, ?string $name = null, ?int $attribute, ?int $mode, ?float $limitMin, ?float $limitMax)
    {
        $this
            ->setType($type)
            ->setExport($export)
            ->setLimitType($limitType)
            ->setName($name)
            ->setAttribute($attribute)
            ->setMode($mode)
            ->setLimitMin($limitMin)
            ->setLimitMax($limitMax)
        ;
    }

    /**
     * Get Type value
     */
    public function getType(): int
    {
        return $this->Type;
    }

    /**
     * Set Type value
     */
    public function setType(int $type): self
    {
        // validation for constraint: int
        if (null !== $type && !(\is_int($type) || ctype_digit($type))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), \gettype($type)), __LINE__);
        }
        $this->Type = $type;

        return $this;
    }

    /**
     * Get Export value
     */
    public function getExport(): string
    {
        return $this->Export;
    }

    /**
     * Set Export value
     *
     * @uses \Scraper\ScraperDPD\EnumType\EExportService::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\EExportService::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setExport(string $export): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\EExportService::valueIsValid($export)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\EExportService', \is_array($export) ? implode(', ', $export) : var_export($export, true), implode(', ', \Scraper\ScraperDPD\EnumType\EExportService::getValidValues())), __LINE__);
        }
        $this->Export = $export;

        return $this;
    }

    /**
     * Get LimitType value
     */
    public function getLimitType(): string
    {
        return $this->LimitType;
    }

    /**
     * Set LimitType value
     *
     * @uses \Scraper\ScraperDPD\EnumType\ELimitTypeService::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\ELimitTypeService::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setLimitType(string $limitType): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\ELimitTypeService::valueIsValid($limitType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\ELimitTypeService', \is_array($limitType) ? implode(', ', $limitType) : var_export($limitType, true), implode(', ', \Scraper\ScraperDPD\EnumType\ELimitTypeService::getValidValues())), __LINE__);
        }
        $this->LimitType = $limitType;

        return $this;
    }

    /**
     * Get Name value
     */
    public function getName(): ?string
    {
        return $this->Name;
    }

    /**
     * Set Name value
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (null !== $name && !\is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), \gettype($name)), __LINE__);
        }
        $this->Name = $name;

        return $this;
    }

    /**
     * Get Attribute value
     */
    public function getAttribute(): int
    {
        return $this->Attribute;
    }

    /**
     * Set Attribute value
     */
    public function setAttribute(?int $attribute): self
    {
        // validation for constraint: int
        if (null !== $attribute && !(\is_int($attribute) || ctype_digit($attribute))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attribute, true), \gettype($attribute)), __LINE__);
        }
        $this->Attribute = $attribute;

        return $this;
    }

    /**
     * Get Mode value
     */
    public function getMode(): int
    {
        return $this->Mode;
    }

    /**
     * Set Mode value
     */
    public function setMode(?int $mode): self
    {
        // validation for constraint: int
        if (null !== $mode && !(\is_int($mode) || ctype_digit($mode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mode, true), \gettype($mode)), __LINE__);
        }
        $this->Mode = $mode;

        return $this;
    }

    /**
     * Get LimitMin value
     */
    public function getLimitMin(): float
    {
        return $this->LimitMin;
    }

    /**
     * Set LimitMin value
     */
    public function setLimitMin(?float $limitMin): self
    {
        // validation for constraint: float
        if (null !== $limitMin && !(\is_float($limitMin) || is_numeric($limitMin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($limitMin, true), \gettype($limitMin)), __LINE__);
        }
        $this->LimitMin = $limitMin;

        return $this;
    }

    /**
     * Get LimitMax value
     */
    public function getLimitMax(): float
    {
        return $this->LimitMax;
    }

    /**
     * Set LimitMax value
     */
    public function setLimitMax(?float $limitMax): self
    {
        // validation for constraint: float
        if (null !== $limitMax && !(\is_float($limitMax) || is_numeric($limitMax))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($limitMax, true), \gettype($limitMax)), __LINE__);
        }
        $this->LimitMax = $limitMax;

        return $this;
    }
}
