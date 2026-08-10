<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Model;

class Shipping
{
    public ?string $type = null;
    public ?string $carrier = null;
    public ?string $proformaUrl = null;
    public ?float $shippingPriceExclTax = null;
}
