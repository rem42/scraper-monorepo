<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class StockMoveRequest extends ReadRequest
{
    /** @var array<string> */
    protected array $fields = [
        'display_name',
        'product_id',
        'product_qty',
    ];

    public function getModel(): string
    {
        return 'stock.move';
    }
}
