<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Model;

class Product
{
    public ?string $id = null;
    public ?string $name = null;
    public ?string $sku = null;
    public ?string $ean13 = null;
    public ?float $price = null;
    public ?float $weight = null;
    public ?string $manufacturingCountryCode = null;
    public ?string $customsCode = null;
}
