<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class GetCustomersRequest extends SearchReadRequest
{
    protected function getOdooModel(): string
    {
        return 'res.partner';
    }
}
