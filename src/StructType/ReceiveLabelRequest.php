<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ReceiveLabelRequest StructType
 */
#[\AllowDynamicProperties]
class ReceiveLabelRequest extends ReceiveLabelRequestBase
{
    /**
     * The countrycode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $countrycode = null;
    /**
     * The centernumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $centernumber = null;
    /**
     * The parcelnumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $parcelnumber = null;

    /**
     * Constructor method for ReceiveLabelRequest
     *
     * @uses ReceiveLabelRequest::setCountrycode()
     * @uses ReceiveLabelRequest::setCenternumber()
     * @uses ReceiveLabelRequest::setParcelnumber()
     */
    public function __construct(?string $countrycode = null, ?string $centernumber = null, ?string $parcelnumber = null)
    {
        $this
            ->setCountrycode($countrycode)
            ->setCenternumber($centernumber)
            ->setParcelnumber($parcelnumber)
        ;
    }

    /**
     * Get countrycode value
     */
    public function getCountrycode(): ?string
    {
        return $this->countrycode;
    }

    /**
     * Set countrycode value
     */
    public function setCountrycode(?string $countrycode = null): self
    {
        // validation for constraint: string
        if (null !== $countrycode && !\is_string($countrycode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countrycode, true), \gettype($countrycode)), __LINE__);
        }
        $this->countrycode = $countrycode;

        return $this;
    }

    /**
     * Get centernumber value
     */
    public function getCenternumber(): ?string
    {
        return $this->centernumber;
    }

    /**
     * Set centernumber value
     */
    public function setCenternumber(?string $centernumber = null): self
    {
        // validation for constraint: string
        if (null !== $centernumber && !\is_string($centernumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($centernumber, true), \gettype($centernumber)), __LINE__);
        }
        $this->centernumber = $centernumber;

        return $this;
    }

    /**
     * Get parcelnumber value
     */
    public function getParcelnumber(): ?string
    {
        return $this->parcelnumber;
    }

    /**
     * Set parcelnumber value
     */
    public function setParcelnumber(?string $parcelnumber = null): self
    {
        // validation for constraint: string
        if (null !== $parcelnumber && !\is_string($parcelnumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelnumber, true), \gettype($parcelnumber)), __LINE__);
        }
        $this->parcelnumber = $parcelnumber;

        return $this;
    }
}
