<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Api;

use Scraper\ScraperOdoo\Model\Partner;

class PartnerApi extends OdooApi
{
    protected function getType(): string
    {
        return Partner::class . '[]';
    }
}
