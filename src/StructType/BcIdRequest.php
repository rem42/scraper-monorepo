<?php declare(strict_types=1);

namespace Scraper\ScraperDPD\StructType;

/**
 * This class stands for BcIdRequest StructType
 */
#[\AllowDynamicProperties]
class BcIdRequest extends BcIdBaseRequest
{
    /**
     * The Barcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?BcData $Barcode = null;

    /**
     * Constructor method for BcIdRequest
     *
     * @uses BcIdRequest::setBarcode()
     */
    public function __construct(?BcData $barcode = null)
    {
        $this
            ->setBarcode($barcode)
        ;
    }

    /**
     * Get Barcode value
     */
    public function getBarcode(): ?BcData
    {
        return $this->Barcode;
    }

    /**
     * Set Barcode value
     */
    public function setBarcode(?BcData $barcode = null): self
    {
        $this->Barcode = $barcode;

        return $this;
    }
}
