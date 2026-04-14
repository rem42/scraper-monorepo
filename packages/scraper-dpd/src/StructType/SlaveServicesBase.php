<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for SlaveServicesBase StructType
 */
#[\AllowDynamicProperties]
class SlaveServicesBase extends ServiceBaseList
{
    /**
     * The extraInsurance
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ExtraInsurance $extraInsurance = null;

    /**
     * Constructor method for SlaveServicesBase
     *
     * @uses SlaveServicesBase::setExtraInsurance()
     */
    public function __construct(?ExtraInsurance $extraInsurance = null)
    {
        $this
            ->setExtraInsurance($extraInsurance)
        ;
    }

    /**
     * Get extraInsurance value
     */
    public function getExtraInsurance(): ?ExtraInsurance
    {
        return $this->extraInsurance;
    }

    /**
     * Set extraInsurance value
     */
    public function setExtraInsurance(?ExtraInsurance $extraInsurance = null): self
    {
        $this->extraInsurance = $extraInsurance;

        return $this;
    }
}
