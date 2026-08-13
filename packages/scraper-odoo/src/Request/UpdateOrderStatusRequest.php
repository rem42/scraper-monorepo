<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class UpdateOrderStatusRequest extends WriteRequest
{
    public function getModel(): string
    {
        return 'sale.order';
    }
}
