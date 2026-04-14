<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rendezvous StructType
 */
#[\AllowDynamicProperties]
class Rendezvous extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $Type;
    /**
     * The From
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $From;
    /**
     * The To
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected string $To;
    /**
     * The PredictChoice
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected int $PredictChoice;

    /**
     * Constructor method for Rendezvous
     *
     * @uses Rendezvous::setType()
     * @uses Rendezvous::setFrom()
     * @uses Rendezvous::setTo()
     * @uses Rendezvous::setPredictChoice()
     */
    public function __construct(string $type, string $from, string $to, int $predictChoice)
    {
        $this
            ->setType($type)
            ->setFrom($from)
            ->setTo($to)
            ->setPredictChoice($predictChoice)
        ;
    }

    /**
     * Get Type value
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * Set Type value
     *
     * @uses \Scraper\ScraperDPD\EnumType\ERendezvousType::valueIsValid()
     * @uses \Scraper\ScraperDPD\EnumType\ERendezvousType::getValidValues()
     *
     * @throws \InvalidArgumentException
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperDPD\EnumType\ERendezvousType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperDPD\EnumType\ERendezvousType', \is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Scraper\ScraperDPD\EnumType\ERendezvousType::getValidValues())), __LINE__);
        }
        $this->Type = $type;

        return $this;
    }

    /**
     * Get From value
     */
    public function getFrom(): string
    {
        return $this->From;
    }

    /**
     * Set From value
     */
    public function setFrom(string $from): self
    {
        // validation for constraint: string
        if (null !== $from && !\is_string($from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($from, true), \gettype($from)), __LINE__);
        }
        $this->From = $from;

        return $this;
    }

    /**
     * Get To value
     */
    public function getTo(): string
    {
        return $this->To;
    }

    /**
     * Set To value
     */
    public function setTo(string $to): self
    {
        // validation for constraint: string
        if (null !== $to && !\is_string($to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($to, true), \gettype($to)), __LINE__);
        }
        $this->To = $to;

        return $this;
    }

    /**
     * Get PredictChoice value
     */
    public function getPredictChoice(): int
    {
        return $this->PredictChoice;
    }

    /**
     * Set PredictChoice value
     */
    public function setPredictChoice(int $predictChoice): self
    {
        // validation for constraint: int
        if (null !== $predictChoice && !(\is_int($predictChoice) || ctype_digit($predictChoice))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($predictChoice, true), \gettype($predictChoice)), __LINE__);
        }
        $this->PredictChoice = $predictChoice;

        return $this;
    }
}
