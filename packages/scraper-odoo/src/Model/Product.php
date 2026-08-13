<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Model;

class Product
{
    public ?int $id = null;
    public ?string $code = null;
    public ?string $displayName = null;
    public ?string $name = null;
    public ?string $weight = null;
    public ?string $barcode = null;
    public ?string $hsCode = null;
    public ?string $countryOfOrigin = null;
    public ?float $listPrice = null;
    public ?\DateTime $createDate = null;
    public ?\DateTime $writeDate = null;
}
