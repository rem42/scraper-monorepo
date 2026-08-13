<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

class UpdateOrderStatusApi extends OdooApi
{
    protected function getType(): string
    {
        return 'bool';
    }
}
