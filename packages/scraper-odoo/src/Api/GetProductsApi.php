<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

use Scraper\ScraperOdoo\Model\Product;

class GetProductsApi extends OdooApi
{
    protected function getType(): string
    {
        return Product::class . '[]';
    }
}
