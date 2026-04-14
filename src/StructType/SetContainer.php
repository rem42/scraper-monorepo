<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetContainer StructType
 */
#[\AllowDynamicProperties]
class SetContainer extends AbstractStructBase
{
    /**
     * The SetContainerRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?SetContainerRequest $SetContainerRequest;

    /**
     * Constructor method for SetContainer
     *
     * @uses SetContainer::setSetContainerRequest()
     */
    public function __construct(?SetContainerRequest $setContainerRequest)
    {
        $this
            ->setSetContainerRequest($setContainerRequest)
        ;
    }

    /**
     * Get SetContainerRequest value
     */
    public function getSetContainerRequest(): SetContainerRequest
    {
        return $this->SetContainerRequest;
    }

    /**
     * Set SetContainerRequest value
     */
    public function setSetContainerRequest(?SetContainerRequest $setContainerRequest): self
    {
        $this->SetContainerRequest = $setContainerRequest;

        return $this;
    }
}
