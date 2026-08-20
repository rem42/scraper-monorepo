<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class OrderLineRequest extends ReadRequest
{
    /** @var array<string> */
    protected array $fields = [
        'id',
        'product_id',
        'price_unit',
        'price_reduce_taxexcl',
    ];

    public function getModel(): string
    {
        return 'sale.order.line';
    }
}
