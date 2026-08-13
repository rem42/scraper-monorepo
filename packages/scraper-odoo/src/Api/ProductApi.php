<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

use Scraper\ScraperOdoo\Model\Product;

class ProductApi extends OdooApi
{
    protected function getType(): string
    {
        return Product::class . '[]';
    }
}
