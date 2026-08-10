<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Api;

use Scraper\Scraper\Request\ScraperRequest;
use Scraper\ScraperNoGrad\Model\Order;
use Scraper\ScraperNoGrad\Request\OrderRequest;

class OrderApi extends NoGradApi
{
    protected OrderRequest|ScraperRequest $request;

    public function execute(): object|array|bool|string
    {
        return $this->serializer->deserialize(
            $this->response->getContent(),
            Order::class,
            'json'
        );
    }
}
