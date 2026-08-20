<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Model;

class StockMove
{
    public ?int $id = null;
    public ?string $displayName = null;

    /** @var array<int|string> */
    public array $productId = [];
    public int|float|null $productQty = null;
    public int|float|null $priceUnit = null;

    public function addProductId($productId): self
    {
        $this->productId[] = $productId;

        return $this;
    }
}
