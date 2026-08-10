<?php

declare(strict_types=1);

namespace Scraper\ScraperJeudiMerci\Api;

use Scraper\Scraper\Request\ScraperRequest;
use Scraper\ScraperJeudiMerci\Model\Orders;
use Scraper\ScraperJeudiMerci\Model\Products;
use Scraper\ScraperJeudiMerci\Request\ListRequest;

class ListApi extends JeudiMerciApi
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
            'products' => Products::class,
            'orders' => Orders::class,
            default => throw new \Exception('Object not found'),
        };
    }
}
