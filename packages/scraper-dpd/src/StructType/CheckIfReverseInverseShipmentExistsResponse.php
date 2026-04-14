<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckIfReverseInverseShipmentExistsResponse StructType
 */
#[\AllowDynamicProperties]
class CheckIfReverseInverseShipmentExistsResponse extends AbstractStructBase
{
    /**
     * The CheckIfReverseInverseShipmentExistsResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $CheckIfReverseInverseShipmentExistsResult;

    /**
     * Constructor method for CheckIfReverseInverseShipmentExistsResponse
     *
     * @uses CheckIfReverseInverseShipmentExistsResponse::setCheckIfReverseInverseShipmentExistsResult()
     */
    public function __construct(string $checkIfReverseInverseShipmentExistsResult)
    {
        $this
            ->setCheckIfReverseInverseShipmentExistsResult($checkIfReverseInverseShipmentExistsResult)
        ;
    }

    /**
     * Get CheckIfReverseInverseShipmentExistsResult value
     */
    public function getCheckIfReverseInverseShipmentExistsResult(): string
    {
        return $this->CheckIfReverseInverseShipmentExistsResult;
    }

    /**
     * Set CheckIfReverseInverseShipmentExistsResult value
     *
     * @uses \Scraper\ScraperDPD\EnumType\CheckReverseInverseShipmentReturn::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\CheckReverseInverseShipmentReturn::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setCheckIfReverseInverseShipmentExistsResult(string $checkIfReverseInverseShipmentExistsResult): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\CheckReverseInverseShipmentReturn::valueIsValid($checkIfReverseInverseShipmentExistsResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\CheckReverseInverseShipmentReturn', \is_array($checkIfReverseInverseShipmentExistsResult) ? implode(', ', $checkIfReverseInverseShipmentExistsResult) : var_export($checkIfReverseInverseShipmentExistsResult, true), implode(', ', \Scraper\ScraperDPD\EnumType\CheckReverseInverseShipmentReturn::getValidValues())), __LINE__);
        }
        $this->CheckIfReverseInverseShipmentExistsResult = $checkIfReverseInverseShipmentExistsResult;

        return $this;
    }
}
