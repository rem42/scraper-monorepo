<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class CarrierListRequest extends SearchReadRequest
{
    /** @var array<string> */
    protected array $fields = [
        'id',
        'display_name',
    ];

    public function getModel(): string
    {
        return 'delivery.carrier';
    }
}
