<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRdvShipmentDataRequest StructType
 */
#[\AllowDynamicProperties]
class GetRdvShipmentDataRequest extends AbstractStructBase
{
    /**
     * The SearchMode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $SearchMode;
    /**
     * The SearchString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $SearchString = null;

    /**
     * Constructor method for GetRdvShipmentDataRequest
     *
     * @uses GetRdvShipmentDataRequest::setSearchMode()
     * @uses GetRdvShipmentDataRequest::setSearchString()
     */
    public function __construct(string $searchMode, ?string $searchString = null)
    {
        $this
            ->setSearchMode($searchMode)
            ->setSearchString($searchString)
        ;
    }

    /**
     * Get SearchMode value
     */
    public function getSearchMode(): string
    {
        return $this->SearchMode;
    }

    /**
     * Set SearchMode value
     *
     * @uses \Scraper\ScraperDPD\EnumType\RdvShipmentDataSearchMode::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\RdvShipmentDataSearchMode::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setSearchMode(string $searchMode): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\RdvShipmentDataSearchMode::valueIsValid($searchMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\RdvShipmentDataSearchMode', \is_array($searchMode) ? implode(', ', $searchMode) : var_export($searchMode, true), implode(', ', \Scraper\ScraperDPD\EnumType\RdvShipmentDataSearchMode::getValidValues())), __LINE__);
        }
        $this->SearchMode = $searchMode;

        return $this;
    }

    /**
     * Get SearchString value
     */
    public function getSearchString(): ?string
    {
        return $this->SearchString;
    }

    /**
     * Set SearchString value
     */
    public function setSearchString(?string $searchString = null): self
    {
        // validation for constraint: string
        if (null !== $searchString && !\is_string($searchString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchString, true), \gettype($searchString)), __LINE__);
        }
        $this->SearchString = $searchString;

        return $this;
    }
}
