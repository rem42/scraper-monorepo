<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Model;

class Product
{
    public ?int $id = null;
    public string|bool|null $code = null;
    public ?string $displayName = null;
    public ?string $name = null;
    public ?float $weight = null;
    public bool|string|null $barcode = null;
    public bool|string|null $hsCode = null;
    public array|bool|null $countryOfOrigin = [];
    public ?float $lstPrice = null;
    public ?string $createDate = null;
    public ?string $writeDate = null;

    public function addCountryOfOrigin($countryOfOrigin): self
    {
        $this->countryOfOrigin[] = $countryOfOrigin;

        return $this;
    }
}
