<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class StockRequest extends ReadRequest
{
    /** @var array<string> */
    protected array $fields = [
        'id',
        'display_name',
        'product_id',
        'location_id',
        'quantity',
        'reserved_quantity',
        'available_quantity',
    ];

    public function getModel(): string
    {
        return 'stock.quant';
    }
}
