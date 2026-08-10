<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Api;

use Scraper\ScraperJeudiMerci\Model\CarrierList;

class CarrierListApi extends JeudiMerciApi
{
    public function execute(): object|array|bool|string
    {
        return new CarrierList(json_decode($this->response->getContent(), true));
    }
}
