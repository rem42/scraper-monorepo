<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class GetProductsRequest extends SearchReadRequest
{
    public function getOdooModel(): string
    {
        return 'product.product';
    }
}
