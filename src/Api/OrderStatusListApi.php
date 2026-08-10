<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Api;

use Scraper\ScraperJeudiMerci\Model\OrderStatut;

class OrderStatusListApi extends JeudiMerciApi
{
    public function execute(): object|array|bool|string
    {
        return new OrderStatut(json_decode($this->response->getContent(), true));
    }
}
