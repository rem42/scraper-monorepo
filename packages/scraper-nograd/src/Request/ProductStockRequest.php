<?php

declare(strict_types=1);

namespace Scraper\ScraperNoGrad\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestBodyJson;
use Scraper\ScraperNoGrad\Rest\ProductStock;

#[Scraper(method: Method::POST, path: 'products/stock')]
class ProductStockRequest extends NoGradRequest implements RequestBodyJson
{
    public function __construct(
        string $key,
        protected ProductStock $productStock,
    ) {
        parent::__construct($key);
    }

    public function getJson(): object
    {
        return $this->productStock;
    }
}
