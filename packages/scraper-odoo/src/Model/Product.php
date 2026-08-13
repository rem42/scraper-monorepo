<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Model;

class Product
{
    public ?int $id = null;
    public ?string $name = null;
    public ?string $default_code = null;
    public ?string $barcode = null;
    public ?float $list_price = null;
    public ?float $qty_available = null;
    public ?float $weight = null;
    public ?bool $active = null;
}
