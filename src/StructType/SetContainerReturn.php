<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetContainerReturn StructType
 */
#[\AllowDynamicProperties]
class SetContainerReturn extends AbstractStructBase
{
    /**
     * The WSResp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ResponseObject $WSResp = null;
    /**
     * The CntrCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CntrCode = null;
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $OrderID = null;
    /**
     * The LabelUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $LabelUrl = null;
    /**
     * The CABCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $CABCode = null;

    /**
     * Constructor method for SetContainerReturn
     *
     * @uses SetContainerReturn::setWSResp()
     * @uses SetContainerReturn::setCntrCode()
     * @uses SetContainerReturn::setOrderID()
     * @uses SetContainerReturn::setLabelUrl()
     * @uses SetContainerReturn::setCABCode()
     */
    public function __construct(?ResponseObject $wSResp = null, ?string $cntrCode = null, ?string $orderID = null, ?string $labelUrl = null, ?string $cABCode = null)
    {
        $this
            ->setWSResp($wSResp)
            ->setCntrCode($cntrCode)
            ->setOrderID($orderID)
            ->setLabelUrl($labelUrl)
            ->setCABCode($cABCode)
        ;
    }

    /**
     * Get WSResp value
     */
    public function getWSResp(): ?ResponseObject
    {
        return $this->WSResp;
    }

    /**
     * Set WSResp value
     */
    public function setWSResp(?ResponseObject $wSResp = null): self
    {
        $this->WSResp = $wSResp;

        return $this;
    }

    /**
     * Get CntrCode value
     */
    public function getCntrCode(): ?string
    {
        return $this->CntrCode;
    }

    /**
     * Set CntrCode value
     */
    public function setCntrCode(?string $cntrCode = null): self
    {
        // validation for constraint: string
        if (null !== $cntrCode && !\is_string($cntrCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cntrCode, true), \gettype($cntrCode)), __LINE__);
        }
        $this->CntrCode = $cntrCode;

        return $this;
    }

    /**
     * Get OrderID value
     */
    public function getOrderID(): ?string
    {
        return $this->OrderID;
    }

    /**
     * Set OrderID value
     */
    public function setOrderID(?string $orderID = null): self
    {
        // validation for constraint: string
        if (null !== $orderID && !\is_string($orderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderID, true), \gettype($orderID)), __LINE__);
        }
        $this->OrderID = $orderID;

        return $this;
    }

    /**
     * Get LabelUrl value
     */
    public function getLabelUrl(): ?string
    {
        return $this->LabelUrl;
    }

    /**
     * Set LabelUrl value
     */
    public function setLabelUrl(?string $labelUrl = null): self
    {
        // validation for constraint: string
        if (null !== $labelUrl && !\is_string($labelUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelUrl, true), \gettype($labelUrl)), __LINE__);
        }
        $this->LabelUrl = $labelUrl;

        return $this;
    }

    /**
     * Get CABCode value
     */
    public function getCABCode(): ?string
    {
        return $this->CABCode;
    }

    /**
     * Set CABCode value
     */
    public function setCABCode(?string $cABCode = null): self
    {
        // validation for constraint: string
        if (null !== $cABCode && !\is_string($cABCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cABCode, true), \gettype($cABCode)), __LINE__);
        }
        $this->CABCode = $cABCode;

        return $this;
    }
}
