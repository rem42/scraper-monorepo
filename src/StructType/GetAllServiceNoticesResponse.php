<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllServiceNoticesResponse StructType
 */
#[\AllowDynamicProperties]
class GetAllServiceNoticesResponse extends AbstractStructBase
{
    /**
     * The DataComplete
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     */
    protected bool $DataComplete;
    /**
     * The GetAllServiceNoticesResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?GetAllServiceNoticesResponse $GetAllServiceNoticesResult = null;
    /**
     * The ServiceNotices
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?\Scraper\ScraperDPD\ArrayType\ArrayOfServiceNoticeEntry $ServiceNotices = null;
    /**
     * The LastKey
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $LastKey = null;

    /**
     * Constructor method for GetAllServiceNoticesResponse
     *
     * @uses GetAllServiceNoticesResponse::setDataComplete()
     * @uses GetAllServiceNoticesResponse::setGetAllServiceNoticesResult()
     * @uses GetAllServiceNoticesResponse::setServiceNotices()
     * @uses GetAllServiceNoticesResponse::setLastKey()
     */
    public function __construct(bool $dataComplete, ?self $getAllServiceNoticesResult = null, ?\Scraper\ScraperDPD\ArrayType\ArrayOfServiceNoticeEntry $serviceNotices = null, ?string $lastKey = null)
    {
        $this
            ->setDataComplete($dataComplete)
            ->setGetAllServiceNoticesResult($getAllServiceNoticesResult)
            ->setServiceNotices($serviceNotices)
            ->setLastKey($lastKey)
        ;
    }

    /**
     * Get DataComplete value
     */
    public function getDataComplete(): bool
    {
        return $this->DataComplete;
    }

    /**
     * Set DataComplete value
     */
    public function setDataComplete(bool $dataComplete): self
    {
        // validation for constraint: boolean
        if (null !== $dataComplete && !\is_bool($dataComplete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dataComplete, true), \gettype($dataComplete)), __LINE__);
        }
        $this->DataComplete = $dataComplete;

        return $this;
    }

    /**
     * Get GetAllServiceNoticesResult value
     */
    public function getGetAllServiceNoticesResult(): ?self
    {
        return $this->GetAllServiceNoticesResult;
    }

    /**
     * Set GetAllServiceNoticesResult value
     */
    public function setGetAllServiceNoticesResult(?self $getAllServiceNoticesResult = null): self
    {
        $this->GetAllServiceNoticesResult = $getAllServiceNoticesResult;

        return $this;
    }

    /**
     * Get ServiceNotices value
     */
    public function getServiceNotices(): ?\Scraper\ScraperDPD\ArrayType\ArrayOfServiceNoticeEntry
    {
        return $this->ServiceNotices;
    }

    /**
     * Set ServiceNotices value
     */
    public function setServiceNotices(?\Scraper\ScraperDPD\ArrayType\ArrayOfServiceNoticeEntry $serviceNotices = null): self
    {
        $this->ServiceNotices = $serviceNotices;

        return $this;
    }

    /**
     * Get LastKey value
     */
    public function getLastKey(): ?string
    {
        return $this->LastKey;
    }

    /**
     * Set LastKey value
     */
    public function setLastKey(?string $lastKey = null): self
    {
        // validation for constraint: string
        if (null !== $lastKey && !\is_string($lastKey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastKey, true), \gettype($lastKey)), __LINE__);
        }
        $this->LastKey = $lastKey;

        return $this;
    }
}
