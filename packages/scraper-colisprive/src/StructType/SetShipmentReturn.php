<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetShipmentReturn StructType
 */
#[\AllowDynamicProperties]
class SetShipmentReturn extends AbstractStructBase
{
    /**
     * The WSResp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ResponseObject $WSResp = null;
    /**
     * The ShipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $ShipCode = null;
    /**
     * The PclList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     *
     * @var array<\Scraper\ScraperColisPrive\StructType\LightParcelObject>
     */
    protected ?array $PclList = null;
    /**
     * The MnftUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?string $MnftUrl = null;

    /**
     * Constructor method for SetShipmentReturn
     *
     * @uses SetShipmentReturn::setWSResp()
     * @uses SetShipmentReturn::setShipCode()
     * @uses SetShipmentReturn::setPclList()
     * @uses SetShipmentReturn::setMnftUrl()
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\LightParcelObject> $pclList
     */
    public function __construct(?ResponseObject $wSResp = null, ?string $shipCode = null, ?array $pclList = null, ?string $mnftUrl = null)
    {
        $this
            ->setWSResp($wSResp)
            ->setShipCode($shipCode)
            ->setPclList($pclList)
            ->setMnftUrl($mnftUrl)
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
     * Get ShipCode value
     */
    public function getShipCode(): ?string
    {
        return $this->ShipCode;
    }

    /**
     * Set ShipCode value
     */
    public function setShipCode(?string $shipCode = null): self
    {
        // validation for constraint: string
        if (null !== $shipCode && !\is_string($shipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipCode, true), \gettype($shipCode)), __LINE__);
        }
        $this->ShipCode = $shipCode;

        return $this;
    }

    /**
     * Get PclList value
     *
     * @return array<\Scraper\ScraperColisPrive\StructType\LightParcelObject>
     */
    public function getPclList(): ?array
    {
        return $this->PclList;
    }

    /**
     * This method is responsible for validating the value(s) passed to the setPclList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPclList method
     * This has to validate that each item contained by the array match the itemType constraint
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePclListForArrayConstraintFromSetPclList(?array $values = []): string
    {
        if (!\is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];

        foreach ($values as $setShipmentReturnPclListItem) {
            // validation for constraint: itemType
            if (!$setShipmentReturnPclListItem instanceof LightParcelObject) {
                $invalidValues[] = \is_object($setShipmentReturnPclListItem) ? $setShipmentReturnPclListItem::class : sprintf('%s(%s)', \gettype($setShipmentReturnPclListItem), var_export($setShipmentReturnPclListItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The PclList property can only contain items of type \Scraper\ScraperColisPrive\StructType\LightParcelObject, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);

        return $message;
    }

    /**
     * Set PclList value
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\LightParcelObject> $pclList
     *
     * @throws \InvalidArgumentException
     */
    public function setPclList(?array $pclList = null): self
    {
        // validation for constraint: array
        if ('' !== ($pclListArrayErrorMessage = self::validatePclListForArrayConstraintFromSetPclList($pclList))) {
            throw new \InvalidArgumentException($pclListArrayErrorMessage, __LINE__);
        }
        $this->PclList = $pclList;

        return $this;
    }

    /**
     * Add item to PclList value
     *
     * @throws \InvalidArgumentException
     */
    public function addToPclList(LightParcelObject $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof LightParcelObject) {
            throw new \InvalidArgumentException(sprintf('The PclList property can only contain items of type \Scraper\ScraperColisPrive\StructType\LightParcelObject, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->PclList[] = $item;

        return $this;
    }

    /**
     * Get MnftUrl value
     */
    public function getMnftUrl(): ?string
    {
        return $this->MnftUrl;
    }

    /**
     * Set MnftUrl value
     */
    public function setMnftUrl(?string $mnftUrl = null): self
    {
        // validation for constraint: string
        if (null !== $mnftUrl && !\is_string($mnftUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mnftUrl, true), \gettype($mnftUrl)), __LINE__);
        }
        $this->MnftUrl = $mnftUrl;

        return $this;
    }
}
