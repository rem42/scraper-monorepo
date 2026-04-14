<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for ShipmentDataExtendedBc StructType
 */
#[\AllowDynamicProperties]
class ShipmentDataExtendedBc extends ShipmentDataExtendedBcBase
{
    /**
     * The IsPostman
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $IsPostman;

    /**
     * Constructor method for ShipmentDataExtendedBc
     *
     * @uses ShipmentDataExtendedBc::setIsPostman()
     */
    public function __construct(bool $isPostman)
    {
        $this
            ->setIsPostman($isPostman)
        ;
    }

    /**
     * Get IsPostman value
     */
    public function getIsPostman(): bool
    {
        return $this->IsPostman;
    }

    /**
     * Set IsPostman value
     */
    public function setIsPostman(bool $isPostman): self
    {
        // validation for constraint: boolean
        if (null !== $isPostman && !\is_bool($isPostman)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPostman, true), \gettype($isPostman)), __LINE__);
        }
        $this->IsPostman = $isPostman;

        return $this;
    }
}
