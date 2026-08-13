<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class UpdateOrderStatusRequest extends WriteRequest
{
    public function getOdooModel(): string
    {
        return 'sale.order';
    }
}
