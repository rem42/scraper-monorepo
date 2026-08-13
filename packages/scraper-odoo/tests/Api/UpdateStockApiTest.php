<?php

declare(strict_types=1);

namespace Scraper\ScraperOdoo\Tests\Api;

use Scraper\ScraperOdoo\Api\UpdateStockApi;
use Scraper\ScraperOdoo\Request\UpdateStockRequest;

class UpdateStockApiTest extends AbstractOdooApiTestCase
{
    public function testUpdateStockSuccess(): void
    {
        $request = new UpdateStockRequest('odoo.example.com', 'db_name', 'api_key');

        $api = new UpdateStockApi($request, $this->getScraperAttribute(), $this->getResponseMock('write_success.json'));

        $result = $api->execute();

        $this->assertTrue($result);
    }
}
