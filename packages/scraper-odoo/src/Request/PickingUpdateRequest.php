<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Request;

class PickingUpdateRequest extends WriteRequest
{
    public function getModel(): string
    {
        return 'stock.picking';
    }
}
