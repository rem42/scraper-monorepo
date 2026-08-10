<?php declare(strict_types=1);

namespace Scraper\ScraperCompagnieDeboucheurs\Api;

use Scraper\ScraperCompagnieDeboucheurs\Model\Order;

class OrderListApi extends CompagnieDeboucheursApi
{
    public function execute(): array
    {
        return $this->serializer->deserialize(
            $this->response->getContent(),
            Order::class . '[]',
            'json'
        );
    }
}
