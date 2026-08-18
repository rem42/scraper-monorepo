<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class StockCreateRequest extends CreateRequest
{
    public function getModel(): string
    {
        return 'stock.quant';
    }
}
