<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class GetCountriesRequest extends SearchReadRequest
{
    public function getOdooModel(): string
    {
        return 'res.country';
    }
}
