<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

class StockCreateApi extends OdooApi
{
    protected function getType(): string
    {
        return 'array';
    }
}
