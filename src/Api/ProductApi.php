<?php declare(strict_types=1);

namespace Scraper\ScraperCompagnieDeboucheurs\Api;

use Scraper\ScraperCompagnieDeboucheurs\Model\Product;

class ProductApi extends CompagnieDeboucheursApi
{
    public function execute(): Product
    {
        return $this->serializer->deserialize(
            $this->response->getContent(),
            Product::class,
            'json'
        );
    }
}
