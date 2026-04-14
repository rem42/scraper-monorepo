<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for LabelData StructType
 */
#[\AllowDynamicProperties]
class LabelData extends LabelDataPn
{
    /**
     * The Bic3Depot
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Bic3Depot = null;
    /**
     * The Bic3Number
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Bic3Number = null;
    /**
     * The Bic3Checkdigit
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $Bic3Checkdigit = null;

    /**
     * Constructor method for LabelData
     *
     * @uses LabelData::setBic3Depot()
     * @uses LabelData::setBic3Number()
     * @uses LabelData::setBic3Checkdigit()
     */
    public function __construct(?string $bic3Depot = null, ?string $bic3Number = null, ?string $bic3Checkdigit = null)
    {
        $this
            ->setBic3Depot($bic3Depot)
            ->setBic3Number($bic3Number)
            ->setBic3Checkdigit($bic3Checkdigit)
        ;
    }

    /**
     * Get Bic3Depot value
     */
    public function getBic3Depot(): ?string
    {
        return $this->Bic3Depot;
    }

    /**
     * Set Bic3Depot value
     */
    public function setBic3Depot(?string $bic3Depot = null): self
    {
        // validation for constraint: string
        if (null !== $bic3Depot && !\is_string($bic3Depot)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bic3Depot, true), \gettype($bic3Depot)), __LINE__);
        }
        $this->Bic3Depot = $bic3Depot;

        return $this;
    }

    /**
     * Get Bic3Number value
     */
    public function getBic3Number(): ?string
    {
        return $this->Bic3Number;
    }

    /**
     * Set Bic3Number value
     */
    public function setBic3Number(?string $bic3Number = null): self
    {
        // validation for constraint: string
        if (null !== $bic3Number && !\is_string($bic3Number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bic3Number, true), \gettype($bic3Number)), __LINE__);
        }
        $this->Bic3Number = $bic3Number;

        return $this;
    }

    /**
     * Get Bic3Checkdigit value
     */
    public function getBic3Checkdigit(): ?string
    {
        return $this->Bic3Checkdigit;
    }

    /**
     * Set Bic3Checkdigit value
     */
    public function setBic3Checkdigit(?string $bic3Checkdigit = null): self
    {
        // validation for constraint: string
        if (null !== $bic3Checkdigit && !\is_string($bic3Checkdigit)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bic3Checkdigit, true), \gettype($bic3Checkdigit)), __LINE__);
        }
        $this->Bic3Checkdigit = $bic3Checkdigit;

        return $this;
    }
}
