<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Api;

use Scraper\ScraperNoGrad\Model\OrderStatus;

class OrderStatusApi extends NoGradApi
{
    public function execute(): object|array|bool|string
    {
        $orderStatus = $this->serializer->deserialize(
            $this->response->getContent(),
            OrderStatus::class,
            'json'
        );

        return true === $orderStatus->success;
    }
}
