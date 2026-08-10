<?php

declare(strict_types=1);

namespace Scraper\ScraperCompagnieDeboucheurs\Model;

class Product
{
    public ?int $id = null;
    public ?string $ref = null;
    public ?string $name = null;
    public ?int $currentStock = null;
    public ?float $weight = null;
    public ?string $barcode = null;

    /** @var array<int, Customization> */
    public array $customizations = [];

    public function addCustomization(Customization $customization): self
    {
        $this->customizations[] = $customization;

        return $this;
    }
}
