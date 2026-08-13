<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Tests\Api;

use Scraper\ScraperOdoo\Api\GetProductsApi;
use Scraper\ScraperOdoo\Model\Product;
use Scraper\ScraperOdoo\Request\GetProductsRequest;

class GetProductsApiTest extends AbstractOdooApiTestCase
{
    public function testGetProductsSuccess(): void
    {
        $request = new GetProductsRequest('odoo.example.com', 'db_name', 'api_key');

        $api = new GetProductsApi($request, $this->getScraperAttribute(), $this->getResponseMock('products.json'));

        /** @var array<Product> $result */
        $result = $api->execute();

        $this->assertIsArray($result);
        $this->assertCount(2, $result);
        $this->assertInstanceOf(Product::class, $result[0]);
        $this->assertEquals(1, $result[0]->id);
        $this->assertEquals('Product A', $result[0]->name);
        $this->assertEquals(99.99, $result[0]->list_price);
    }
}
