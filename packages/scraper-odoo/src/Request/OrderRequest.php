<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class OrderRequest extends ReadRequest
{
    /** @var array<string> */
    protected array $fields = [
        'id',
        'name',
        'create_date',
        'date_order',
        'expected_date',
        'partner_id',
        'partner_invoice_id',
        'partner_shipping_id',
    ];

    public function getModel(): string
    {
        return 'sale.order';
    }
}
