<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

use Scraper\ScraperOdoo\Model\Picking;

class PickingApi extends OdooApi
{
    protected function getType(): string
    {
        return Picking::class . '[]';
    }
}
