<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

use Scraper\ScraperOdoo\Model\Stock;

class StockApi extends OdooApi
{
    protected function getType(): string
    {
        return Stock::class . '[]';
    }
}
