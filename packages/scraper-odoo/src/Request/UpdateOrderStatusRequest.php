<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class UpdateOrderStatusRequest extends WriteRequest
{
    protected function getOdooModel(): string
    {
        return 'sale.order';
    }
}
