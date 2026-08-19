<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

use Scraper\ScraperOdoo\Model\Id;

class PickingListApi extends OdooApi
{
    protected function getType(): string
    {
        return Id::class . '[]';
    }
}
