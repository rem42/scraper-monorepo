<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateParcelStatusResponse StructType
 */
#[\AllowDynamicProperties]
class UpdateParcelStatusResponse extends AbstractStructBase
{
    /**
     * The UpdateParcelStatusResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?UpdateParcelStatusReturn $UpdateParcelStatusResult = null;

    /**
     * Constructor method for UpdateParcelStatusResponse
     *
     * @uses UpdateParcelStatusResponse::setUpdateParcelStatusResult()
     */
    public function __construct(?UpdateParcelStatusReturn $updateParcelStatusResult = null)
    {
        $this
            ->setUpdateParcelStatusResult($updateParcelStatusResult)
        ;
    }

    /**
     * Get UpdateParcelStatusResult value
     */
    public function getUpdateParcelStatusResult(): ?UpdateParcelStatusReturn
    {
        return $this->UpdateParcelStatusResult;
    }

    /**
     * Set UpdateParcelStatusResult value
     */
    public function setUpdateParcelStatusResult(?UpdateParcelStatusReturn $updateParcelStatusResult = null): self
    {
        $this->UpdateParcelStatusResult = $updateParcelStatusResult;

        return $this;
    }
}
