<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Model;

class Picking
{
    public ?int $id = null;
    public ?string $name = null;
    public ?string $state = null;
    public ?bool $xWmsStatus = null;

    /** @var array<int|string> */
    public array $saleId = [];

    /** @var array<int|string> */
    public array $locationId = [];

    /** @var array<int|string> */
    public array $carrierId = [];
    public int|float|null $carrierPrice = null;

    /** @var array<int, int> */
    public array $moveIds = [];

    public function addSaleId($saleId): self
    {
        $this->saleId[] = $saleId;

        return $this;
    }

    public function addLocationId($locationId): self
    {
        $this->locationId[] = $locationId;

        return $this;
    }

    public function addCarrierId($carrierId): self
    {
        $this->carrierId[] = $carrierId;

        return $this;
    }

    public function addMoveId(int $moveId): self
    {
        $this->moveIds[] = $moveId;

        return $this;
    }
}
