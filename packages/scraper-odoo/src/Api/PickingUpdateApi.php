<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

class PickingUpdateApi extends OdooApi
{
    protected function getType(): string
    {
        return 'bool';
    }
}
