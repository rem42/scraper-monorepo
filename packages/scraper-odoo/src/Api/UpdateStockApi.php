<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

class UpdateStockApi extends OdooApi
{
    protected function getType(): string
    {
        return 'bool'; // Odoo 'write' returns a boolean
    }
}
