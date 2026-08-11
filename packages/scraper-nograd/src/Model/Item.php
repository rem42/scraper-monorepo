<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Model;

class Item
{
    public ?string $ean13 = null;
    public ?int $id = null;
    public ?int $priceHt = null;
    public ?int $quantity = null;
    public ?string $sku = null;
}
