<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Api;

use Scraper\Scraper\Request\ScraperRequest;
use Scraper\ScraperNoGrad\Model\Product;
use Scraper\ScraperNoGrad\Request\ProductRequest;

class ProductApi extends NoGradApi
{
    protected ProductRequest|ScraperRequest $request;

    public function execute(): object|array|bool|string
    {
        return $this->serializer->deserialize(
            $this->response->getContent(),
            Product::class,
            'json'
        );
    }
}
