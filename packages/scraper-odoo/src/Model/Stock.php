<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Model;

class Stock
{
    public ?int $id = null;
    public ?string $displayName = null;

    /** @var array<int|string> */
    public array $productId = [];

    /** @var array<int|string> */
    public array $locationId = [];
    public ?int $quantity = null;
    public ?int $reservedQuantity = null;
    public ?int $availableQuantity = null;

    public function addProductId($productId): self
    {
        $this->productId[] = $productId;

        return $this;
    }

    public function addLocationId($locationId): self
    {
        $this->locationId[] = $locationId;

        return $this;
    }
}
