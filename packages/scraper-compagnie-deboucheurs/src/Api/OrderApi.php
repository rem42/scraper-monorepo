<?php

declare(strict_types=1);

namespace Scraper\ScraperCompagnieDeboucheurs\Api;

use Scraper\ScraperCompagnieDeboucheurs\Model\Order;

class OrderApi extends CompagnieDeboucheursApi
{
    public function execute(): Order
    {
        return $this->serializer->deserialize(
            $this->response->getContent(),
            Order::class,
            'json'
        );
    }
}
