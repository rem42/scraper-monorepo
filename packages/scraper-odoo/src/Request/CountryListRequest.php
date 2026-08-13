<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class CountryListRequest extends SearchReadRequest
{
    /** @var array<string> */
    protected array $fields = [
        'id',
        'display_name',
        'code',
    ];

    public function getModel(): string
    {
        return 'res.country';
    }
}
