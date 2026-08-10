<?php

declare(strict_types=1);

namespace Scraper\ScraperCompagnieDeboucheurs\Api;

use Scraper\ScraperCompagnieDeboucheurs\Model\Product;

class ProductListApi extends CompagnieDeboucheursApi
{
    public function execute(): array
    {
        return $this->serializer->deserialize(
            $this->response->getContent(),
            Product::class . '[]',
            'json'
        );
    }
}
