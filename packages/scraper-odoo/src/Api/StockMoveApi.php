<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

use Scraper\ScraperOdoo\Model\StockMove;

class StockMoveApi extends OdooApi
{
    protected function getType(): string
    {
        return StockMove::class . '[]';
    }
}
