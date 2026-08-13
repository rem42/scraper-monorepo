<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class GetCountriesRequest extends SearchReadRequest
{
    public function getModel(): string
    {
        return 'res.country';
    }
}
