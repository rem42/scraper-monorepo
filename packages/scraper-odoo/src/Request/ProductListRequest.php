<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class ProductListRequest extends SearchReadRequest
{
    /** @var array<string> */
    protected array $fields = ['id'];

    public function getModel(): string
    {
        return 'product.product';
    }
}
