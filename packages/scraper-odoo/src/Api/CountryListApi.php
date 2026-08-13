<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

use Scraper\ScraperOdoo\Model\Country;

class CountryListApi extends OdooApi
{
    protected function getType(): string
    {
        return Country::class . '[]';
    }
}
