<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class GetOrdersRequest extends SearchReadRequest
{
    public function getModel(): string
    {
        return 'sale.order';
    }
}
