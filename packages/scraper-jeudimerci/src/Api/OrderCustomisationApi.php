<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Api;

class OrderCustomisationApi extends JeudiMerciApi
{
    public function execute(): object|array|bool|string
    {
        return $this->response->getContent();
    }
}
