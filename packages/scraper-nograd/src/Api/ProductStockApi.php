<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Api;

use Scraper\ScraperNoGrad\Model\ProductStock;

class ProductStockApi extends NoGradApi
{
    public function execute(): object|array|bool|string
    {
        $productStock = $this->serializer->deserialize(
            $this->response->getContent(),
            ProductStock::class,
            'json'
        );

        return true === $productStock->success;
    }
}
