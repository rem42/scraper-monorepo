<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckIfReverseInverseShipmentExistsBcIdResponse StructType
 */
#[\AllowDynamicProperties]
class CheckIfReverseInverseShipmentExistsBcIdResponse extends AbstractStructBase
{
    /**
     * The CheckIfReverseInverseShipmentExistsBcIdResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $CheckIfReverseInverseShipmentExistsBcIdResult;

    /**
     * Constructor method for CheckIfReverseInverseShipmentExistsBcIdResponse
     *
     * @uses CheckIfReverseInverseShipmentExistsBcIdResponse::setCheckIfReverseInverseShipmentExistsBcIdResult()
     */
    public function __construct(string $checkIfReverseInverseShipmentExistsBcIdResult)
    {
        $this
            ->setCheckIfReverseInverseShipmentExistsBcIdResult($checkIfReverseInverseShipmentExistsBcIdResult)
        ;
    }

    /**
     * Get CheckIfReverseInverseShipmentExistsBcIdResult value
     */
    public function getCheckIfReverseInverseShipmentExistsBcIdResult(): string
    {
        return $this->CheckIfReverseInverseShipmentExistsBcIdResult;
    }

    /**
     * Set CheckIfReverseInverseShipmentExistsBcIdResult value
     *
     * @uses \Scraper\ScraperDPD\EnumType\CheckReverseInverseShipmentReturn::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\CheckReverseInverseShipmentReturn::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setCheckIfReverseInverseShipmentExistsBcIdResult(string $checkIfReverseInverseShipmentExistsBcIdResult): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\CheckReverseInverseShipmentReturn::valueIsValid($checkIfReverseInverseShipmentExistsBcIdResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\CheckReverseInverseShipmentReturn', \is_array($checkIfReverseInverseShipmentExistsBcIdResult) ? implode(', ', $checkIfReverseInverseShipmentExistsBcIdResult) : var_export($checkIfReverseInverseShipmentExistsBcIdResult, true), implode(', ', \Scraper\ScraperDPD\EnumType\CheckReverseInverseShipmentReturn::getValidValues())), __LINE__);
        }
        $this->CheckIfReverseInverseShipmentExistsBcIdResult = $checkIfReverseInverseShipmentExistsBcIdResult;

        return $this;
    }
}
