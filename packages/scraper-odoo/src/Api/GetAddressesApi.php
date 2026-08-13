<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

use Scraper\ScraperOdoo\Model\Address;

class GetAddressesApi extends OdooApi
{
    protected function getType(): string
    {
        return Address::class . '[]';
    }
}
