<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class GetOrderStatusesRequest extends SearchReadRequest
{
    protected function getOdooModel(): string
    {
        return 'sale.order';
    }
}
