<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

use Scraper\ScraperOdoo\Model\OrderStatus;

class GetOrderStatusesApi extends OdooApi
{
    protected function getType(): string
    {
        return OrderStatus::class . '[]';
    }
}
