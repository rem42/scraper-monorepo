<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

use Scraper\ScraperOdoo\Model\Carrier;

class CarrierListApi extends OdooApi
{
    protected function getType(): string
    {
        return Carrier::class . '[]';
    }
}
