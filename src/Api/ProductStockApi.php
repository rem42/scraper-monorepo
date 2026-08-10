<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Api;

class ProductStockApi extends JeudiMerciApi
{
    public function execute(): object|array|bool|string
    {
        return 204 === $this->response->getStatusCode();
    }
}
