<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class GetAddressesRequest extends SearchReadRequest
{
    protected function getOdooModel(): string
    {
        return 'res.partner'; // Addresses and customers are mostly the same model in Odoo
    }
}
