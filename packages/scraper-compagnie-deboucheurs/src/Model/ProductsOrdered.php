<?php

declare(strict_types=1);

namespace Scraper\ScraperCompagnieDeboucheurs\Model;

class ProductsOrdered
{
    public ?float $unitPrice = null;
    public ?int $quantity = null;
    public ?int $idProduct = null;
    public ?string $specificInfo = null;
}
