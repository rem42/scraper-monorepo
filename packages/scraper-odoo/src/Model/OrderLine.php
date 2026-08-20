<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Model;

class OrderLine
{
    public ?int $id = null;

    /** @var array<int|string> */
    public array $productId = [];
    public int|float|null $priceUnit = null;
    public int|float|null $priceReduceTaxexcl = null;

    public function addProductId($productId): self
    {
        $this->productId[] = $productId;

        return $this;
    }
}
