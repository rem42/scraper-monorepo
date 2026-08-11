<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Model;

class ProductStock
{
    public ?bool $success = null;
    public ?string $message = null;
    public ?string $productId = null;
    public ?string $ean13 = null;
    public ?int $newQuantity = null;
}
