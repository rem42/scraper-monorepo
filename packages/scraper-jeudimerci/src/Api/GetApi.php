<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Api;

use Scraper\Scraper\Request\ScraperRequest;
use Scraper\ScraperJeudiMerci\Model\Order;
use Scraper\ScraperJeudiMerci\Model\Product;
use Scraper\ScraperJeudiMerci\Request\ListRequest;

class GetApi extends JeudiMerciApi
{
    protected ListRequest|ScraperRequest $request;

    public function execute(): object|array|bool|string
    {
        return $this->serializer->deserialize(
            $this->response->getContent(),
            $this->getObject(),
            'json'
        );
    }

    protected function getObject(): string
    {
        return match ($this->request->getObject()) {
            'products' => Product::class,
            'orders' => Order::class,
            default => throw new \Exception('Object not found'),
        };
    }
}
