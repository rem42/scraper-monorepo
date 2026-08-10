<?php

declare(strict_types=1);

namespace Scraper\ScraperCompagnieDeboucheurs\Api;

class ProductStockApi extends CompagnieDeboucheursApi
{
    public function execute(): bool
    {
        return 204 === $this->response->getStatusCode();
    }
}
