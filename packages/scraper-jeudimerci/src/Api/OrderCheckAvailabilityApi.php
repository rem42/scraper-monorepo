<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Api;

use Scraper\ScraperJeudiMerci\Model\OrderCheckAvailability;

class OrderCheckAvailabilityApi extends JeudiMerciApi
{
    public function execute(): object|array|bool|string
    {
        return $this->serializer->deserialize(
            $this->response->getContent(),
            OrderCheckAvailability::class,
            'json'
        );
    }
}
