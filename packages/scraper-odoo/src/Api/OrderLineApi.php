<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

use Scraper\ScraperOdoo\Model\OrderLine;

class OrderLineApi extends OdooApi
{
    protected function getType(): string
    {
        return OrderLine::class . '[]';
    }
}
