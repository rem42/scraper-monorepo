<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

use Scraper\ScraperOdoo\Model\Order;

class GetOrdersApi extends OdooApi
{
    protected function getType(): string
    {
        return Order::class . '[]';
    }
}
