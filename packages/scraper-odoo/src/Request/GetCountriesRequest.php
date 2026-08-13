<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class GetCountriesRequest extends SearchReadRequest
{
    protected function getOdooModel(): string
    {
        return 'res.country';
    }
}
