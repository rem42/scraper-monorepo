<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateParcelStatus StructType
 */
#[\AllowDynamicProperties]
class UpdateParcelStatus extends AbstractStructBase
{
    /**
     * The UpdateParcelStatusRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?UpdateParcelStatusRequest $UpdateParcelStatusRequest;

    /**
     * Constructor method for UpdateParcelStatus
     *
     * @uses UpdateParcelStatus::setUpdateParcelStatusRequest()
     */
    public function __construct(?UpdateParcelStatusRequest $updateParcelStatusRequest)
    {
        $this
            ->setUpdateParcelStatusRequest($updateParcelStatusRequest)
        ;
    }

    /**
     * Get UpdateParcelStatusRequest value
     */
    public function getUpdateParcelStatusRequest(): UpdateParcelStatusRequest
    {
        return $this->UpdateParcelStatusRequest;
    }

    /**
     * Set UpdateParcelStatusRequest value
     */
    public function setUpdateParcelStatusRequest(?UpdateParcelStatusRequest $updateParcelStatusRequest): self
    {
        $this->UpdateParcelStatusRequest = $updateParcelStatusRequest;

        return $this;
    }
}
