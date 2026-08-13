<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Tests\Api;

use Scraper\ScraperOdoo\Api\GetProductsApi;
use Scraper\ScraperOdoo\Exception\OdooScraperException;
use Scraper\ScraperOdoo\Request\GetProductsRequest;

class OdooApiErrorTest extends AbstractOdooApiTestCase
{
    public function testOdooErrorResponse(): void
    {
        $request = new GetProductsRequest('odoo.example.com', 'db_name', 'api_key');

        $api = new GetProductsApi($request, $this->getScraperAttribute(), $this->getResponseMock('error.json', 403));

        $this->expectException(OdooScraperException::class);
        $this->expectExceptionMessage("Odoo Error (403): You are not allowed to access 'Product' (product.product) records.");

        $api->execute();
    }
}
