<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class ProductRequest extends ReadRequest
{
    /** @var array<string> */
    protected array $fields = [
        'id',
        'code',
        'display_name',
        'name',
        'weight',
        'barcode',
        'hs_code',
        'country_of_origin',
        'lst_price',
        'create_date',
        'write_date',
    ];

    public function getModel(): string
    {
        return 'product.product';
    }
}
