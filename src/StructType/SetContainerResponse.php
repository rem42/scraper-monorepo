<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetContainerResponse StructType
 */
#[\AllowDynamicProperties]
class SetContainerResponse extends AbstractStructBase
{
    /**
     * The SetContainerResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?SetContainerReturn $SetContainerResult = null;

    /**
     * Constructor method for SetContainerResponse
     *
     * @uses SetContainerResponse::setSetContainerResult()
     */
    public function __construct(?SetContainerReturn $setContainerResult = null)
    {
        $this
            ->setSetContainerResult($setContainerResult)
        ;
    }

    /**
     * Get SetContainerResult value
     */
    public function getSetContainerResult(): ?SetContainerReturn
    {
        return $this->SetContainerResult;
    }

    /**
     * Set SetContainerResult value
     */
    public function setSetContainerResult(?SetContainerReturn $setContainerResult = null): self
    {
        $this->SetContainerResult = $setContainerResult;

        return $this;
    }
}
