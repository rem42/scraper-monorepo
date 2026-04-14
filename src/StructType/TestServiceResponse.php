<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TestServiceResponse StructType
 */
#[\AllowDynamicProperties]
class TestServiceResponse extends AbstractStructBase
{
    /**
     * The TestServiceResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ResponseObject $TestServiceResult = null;

    /**
     * Constructor method for TestServiceResponse
     *
     * @uses TestServiceResponse::setTestServiceResult()
     */
    public function __construct(?ResponseObject $testServiceResult = null)
    {
        $this
            ->setTestServiceResult($testServiceResult)
        ;
    }

    /**
     * Get TestServiceResult value
     */
    public function getTestServiceResult(): ?ResponseObject
    {
        return $this->TestServiceResult;
    }

    /**
     * Set TestServiceResult value
     */
    public function setTestServiceResult(?ResponseObject $testServiceResult = null): self
    {
        $this->TestServiceResult = $testServiceResult;

        return $this;
    }
}
