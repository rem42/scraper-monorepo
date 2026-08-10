<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Api;

class ProductStockApi extends NoGradApi
{
    public function execute(): object|array|bool|string
    {
        return 204 === $this->response->getStatusCode();
    }
}
