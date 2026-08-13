<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

use Scraper\ScraperOdoo\Model\Customer;

class GetCustomersApi extends OdooApi
{
    protected function getType(): string
    {
        return Customer::class . '[]';
    }
}
