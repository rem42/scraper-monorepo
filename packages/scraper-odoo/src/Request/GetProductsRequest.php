<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class GetProductsRequest extends SearchReadRequest
{
    protected function getOdooModel(): string
    {
        return 'product.product';
    }
}
