<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for TerminateCollectionRequestBc StructType
 */
#[\AllowDynamicProperties]
class TerminateCollectionRequestBc extends TerminateCollectionRequestBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?TerminateCollectionRequestBc $request = null;
    /**
     * The barcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $barcode = null;

    /**
     * Constructor method for TerminateCollectionRequestBc
     *
     * @uses TerminateCollectionRequestBc::setRequest()
     * @uses TerminateCollectionRequestBc::setBarcode()
     */
    public function __construct(?self $request = null, ?string $barcode = null)
    {
        $this
            ->setRequest($request)
            ->setBarcode($barcode)
        ;
    }

    /**
     * Get request value
     */
    public function getRequest(): ?self
    {
        return $this->request;
    }

    /**
     * Set request value
     */
    public function setRequest(?self $request = null): self
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Get barcode value
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    /**
     * Set barcode value
     */
    public function setBarcode(?string $barcode = null): self
    {
        // validation for constraint: string
        if (null !== $barcode && !\is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($barcode, true), \gettype($barcode)), __LINE__);
        }
        $this->barcode = $barcode;

        return $this;
    }
}
